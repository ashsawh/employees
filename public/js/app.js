$(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });

    $('#deleteEmployee').click(function() {
        var name = $('h3.panel-title').text();
        BootstrapDialog.show({
            message: 'Are you sure you want to delete ' + name + '?',
            buttons: [{
                icon: 'glyphicon glyphicon-ban-circle',
                label: 'Delete',
                cssClass: 'btn-warning'
            }, {
                label: 'Close',
                action: function(dialogItself){
                    dialogItself.close();
                }
            }]
        });
    })

    $(function() {
        $('#datetimepicker4').datetimepicker({
            pickTime: false
        });
        $('#datetimepicker5').datetimepicker({
            pickTime: false
        });
    });
});
