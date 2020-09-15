import {domEventsHandler} from '../util/domEventsHandler';
import {helperFunctions} from '../lib/helperFunctions';

class _analyticEvents {
    constructor() {
        this.params = {};
    }

    setParams(params, attributes) {
        this.params = params;
        this.attributes = attributes;
        this.initMonitoring();
    }

    initMonitoring() {
        this.params['ga']['events'].forEach((item) => {
            this.attributes.eventEmitter.addListener(item.ev, (params) => {

                if (item.ev == 'hideInvitation' && typeof params !== 'undefined' && params.full) {
                    return ;
                }

                var label = item.el;

                // Set invitation name
                if ((item.ev == 'showInvitation' || item.ev == 'readInvitation' || item.ev == 'fullInvitation' || item.ev == 'cancelInvitation') && typeof params !== 'undefined' && params.name) {
                    label = label || params.name;
                }

                 var js = this.params['ga']['js'].replace(
                     '{{eventCategory}}',JSON.stringify(item.ec)
                 ).replace(
                     '{{eventAction}}',JSON.stringify(item.ea)
                 ).replace(
                     '{{eventLabel}}',JSON.stringify(label)
                 );

                 try {
                     eval(js);
                 } catch (err) {
                    console.log(err);
                 }

            });
        });
    }
}

const analyticEvents = new _analyticEvents();
export {analyticEvents};