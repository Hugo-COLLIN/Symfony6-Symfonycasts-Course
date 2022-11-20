import { Controller } from '@hotwired/stimulus';
import axios from "axios";

/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * song-controls_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
export default class extends Controller {
    // connect() {
    //     console.log("It works great !!!")
    // }

    static values = {
        infoUrl: String
    }

    play(event)
    {
        event.preventDefault();

        //console.log(this.infoUrlValue);
        axios.get(this.infoUrlValue).then((response) => {
            //console.log(response);
            const audio = new Audio(response.data.url);
            audio.play();
        });


    }
}
