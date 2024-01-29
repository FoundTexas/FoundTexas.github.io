import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ["yearButtons", "scrollButtons"]

    showEvents(event) {
        const year = event.target.dataset.year
        this.hideAllEvents()
        this.showEvent(year)
        this.checkScrollButtons()
    }

    scrollToEvent(event) {
        const year = event.target.dataset.year
        const index = parseInt(event.target.dataset.index)
        const eventCard = document.querySelector(`#events-${year} .card:nth-child(${index + 1})`)
        eventCard.scrollIntoView({ behavior: 'smooth', block: 'center' })
    }

    checkScrollButtons() {
        this.scrollButtonsTargets.forEach(scrollButtons => {
            const scrollable = scrollButtons.scrollWidth > scrollButtons.clientWidth
            scrollButtons.style.display = scrollable ? 'block' : 'none'
        })
    }

    hideAllEvents() {
        document.querySelectorAll('.events-wrapper').forEach(eventsWrapper => {
            eventsWrapper.style.display = 'none'
        })
    }

    showEvent(year) {
        document.getElementById(`events-${year}`).style.display = 'block'
    }
}