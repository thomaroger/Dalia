    $(function() {
        $desktop = $ ( ".user_space" );
        
        $desktop.droppable({
            activeClass: "ui-state-highlight",
            drop: function( event, ui ) {
                sendImage( ui.draggable, $(this) );
            }
        });      

        function sendImage($item, $desktop) {
            var postit_id = $('input[name="postit_id"]').val();
            var desktop_id = $desktop.find('input').val();
            desktop_id = desktop_id*1 - 2;
            
            $.ajax({
                type: "POST",
                url: '/postit/update',
                data: {desktop_id : desktop_id, id : postit_id},
                success: function(data) {
                  alert('Post-it envoyé !!!');
                  $item.remove();
                }
              });
        }
    });