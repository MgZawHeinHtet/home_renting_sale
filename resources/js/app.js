import "./bootstrap";
import "tinymce/tinymce";
import "tinymce/skins/ui/oxide/skin.min.css";
import "tinymce/skins/content/default/content.min.css";
import "tinymce/skins/content/default/content.css";
import "tinymce/icons/default/icons";
import "tinymce/themes/silver/theme";
import "tinymce/models/dom/model";

import * as fecha from "fecha";
import HotelDatepicker from "hotel-datepicker";




async function getUnavaliableDates (id){
    const data = await getAllDatesFromDB(id);
    let total_date = [] ;
    
    for (let i = 0; i < data.length; i++) {
        const start_date = new Date(data[i].date_in);
        const end_date = new Date(data[i].date_out);

        // loop from start date to end date
        for (
            let date = start_date;
            date <= end_date;
            date.setDate(date.getDate() + 1)
        ) {
            const numberDate = String(date.getDate()).padStart(2,'0');
            const month = String(date.getMonth()+1).padStart(2,'0');
            const year = date.getFullYear();
            const format_date = year +"-"+month+"-"+numberDate;
            total_date.push(format_date)
        }
        
    }
    return total_date
}


async function getAllDatesFromDB(id) {
    const res = await fetch(`/booking/${id}`);
    const data = await res.json();
    return data
}



const input_box = document.getElementById("input-id");

if (input_box) {
    const current_uri = window.location.href;

    const id = current_uri.split("/")[4];
    
    let a = await getUnavaliableDates(1);
  
    const options = {
        disabledDates:a,
        clearButton: true,
        topbarPosition: "bottom",

        minNights: 30,
        autoClose: false,

        onDayClick: function () {
            console.log("Day clicked!");
        },
        onSelectRange: function () {},
    };
    var hdpkr = new HotelDatepicker(input_box, options);
}



// .. After imports init TinyMCE ..
window.addEventListener("DOMContentLoaded", () => {
    tinymce.init({
        selector: "textarea",

        /* TinyMCE configuration options */
        skin: false,
        content_css: false,
    });
});
