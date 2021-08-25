/*
 * Projeto: DUX LP
 * Desenvolvimento: LAB2B
 */

var attrController = $('main[data-controller]').attr('data-controller');

var Controller = {
    getController: function () {
        if ($('main[data-controller]').length > 0) {
            eval('Controller.' + attrController + '();');
        }
    },
    global: function(){
        Util.corousel();
        
    },

};

jQuery(document).ready(function ($) {
    
});

(console.info || console.log).call(console, "%c<Dev by 🧪 LAB2B Team/>", "color: MediumVioletRed ; font-weight: bold;");
