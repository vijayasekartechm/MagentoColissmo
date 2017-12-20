/*global define*/
define(
    [],
    function () {
        "use strict";
        return {
            getRules: function() {
                return {
                    'country_id': {
                        'required': true
                    },
                    'postcode': {
                        'required': true
                    }
                };
            }
        };
    }
);