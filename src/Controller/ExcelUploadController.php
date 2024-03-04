<?php

namespace App\Controller;

use App\Entity\MileStone;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExcelUploadController extends AbstractController
{
    #[Route('/upload-excel', name: 'upload_excel')]
    public function uploadExcel(Request $request): Response
    {
        $form = $this->createFormBuilder()
            ->add('excelFile', \Symfony\Component\Form\Extension\Core\Type\FileType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $excelFile = $form->get('excelFile')->getData();
            $excelData = $this->loadExcelData($excelFile);

            // Persist loaded data into database
            $entityManager = $this->getDoctrine()->getManager();
            foreach ($excelData as $data) {
                $mileStone = new MileStone();
                $mileStone->setName($data['name']);
                $mileStone->setDescription($data['description']);
                $mileStone->setBulletpoints(json_decode($data['bulletpoints'], true));
                $mileStone->setStartDate(new \DateTime($data['startDate']));
                $mileStone->setEndDate(new \DateTime($data['endDate']));
                $mileStone->setTags(json_decode($data['tags'], true));
                $entityManager->persist($mileStone);
            }
            $entityManager->flush();

            $this->addFlash('success', 'Excel data uploaded successfully.');

            return $this->redirectToRoute('app_index');
        }

        return $this->render('excel_upload.twig', [
            'form' => $form->createView(),
        ]);
    }

    private function loadExcelData($file): array
    {
        // Assuming you have PHPExcel library installed
        $reader = \PHPExcel_IOFactory::createReaderForFile($file);
        $reader->setReadDataOnly(true);
        $objPHPExcel = $reader->load($file);
        $worksheet = $objPHPExcel->getActiveSheet();
        $highestRow = $worksheet->getHighestRow();
        $excelData = [];

        for ($row = 2; $row <= $highestRow; ++$row) {
            $excelData[] = [
                'name' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
                'description' => $worksheet->getCellByColumnAndRow(3, $row)->getValue(),
                'bulletpoints' => $worksheet->getCellByColumnAndRow(4, $row)->getValue(),
                'startDate' => $worksheet->getCellByColumnAndRow(5, $row)->getValue(),
                'endDate' => $worksheet->getCellByColumnAndRow(6, $row)->getValue(),
                'tags' => $worksheet->getCellByColumnAndRow(7, $row)->getValue(),
            ];
        }

        return $excelData;
    }
}

