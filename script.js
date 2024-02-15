document.addEventListener("DOMContentLoaded", function () {
    const calendarContainer = document.getElementById("calendar");
    
    // Ottieni l'anno corrente
    const currentYear = 2024;

    // Ottieni il primo giorno dell'anno
    const firstDay = new Date(currentYear, 0, 1);

    // Creazione del calendario
    const calendarHTML = generateCalendar(firstDay, currentYear);
    calendarContainer.innerHTML = calendarHTML;
});

function generateCalendar(firstDay, year) {
    let html = `<h2>${year} Calendar</h2><table><thead><tr>`;
    
    // Aggiungi i giorni della settimana
    const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    daysOfWeek.forEach(day => {
        html += `<th>${day}</th>`;
    });

    html += `</tr></thead><tbody>`;

    // Calcola il giorno della settimana del primo giorno dell'anno
    let dayOfWeek = firstDay.getDay();

    // Aggiungi le righe del calendario
    for (let month = 0; month < 12; month++) {
        html += "<tr>";

        // Aggiungi i giorni vuoti prima del primo giorno del mese
        for (let i = 0; i < dayOfWeek; i++) {
            html += "<td></td>";
        }

        // Aggiungi i giorni del mese
        while (firstDay.getMonth() === month) {
            html += `<td>${firstDay.getDate()}</td>`;
            firstDay.setDate(firstDay.getDate() + 1);
            dayOfWeek = (dayOfWeek + 1) % 7;

            // Inizia una nuova riga ogni domenica
            if (dayOfWeek === 0 && firstDay.getMonth() === month) {
                html += "</tr><tr>";
            }
        }

        // Completa la riga con giorni vuoti alla fine del mese
        while (dayOfWeek !== 0) {
            html += "<td></td>";
            dayOfWeek = (dayOfWeek + 1) % 7;
        }

        html += "</tr>";
    }

    html += `</tbody></table>`;
    return html;
}
