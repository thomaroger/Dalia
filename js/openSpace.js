    $(function() {
        $desktop = $ ( ".user_space" );
        
        $desktop.droppable({
            activeClass: "ui-state-highlight",
            drop: function( event, ui ) {
                sendImage( ui.draggable );
            }
        });      
        
        $desktop.click(function() {
            alert("Handler for .click() called.");
        });
        
        function sendImage( $item ) {
            var postit_id = $('input[name="postit_id"]').val();
            var desktop_id = $('input[name="desktop_id"]').val();
            
            $.ajax({
                type: "POST",
                url: '/postit/update',
                data: {desktop_id : desktop_id, postit_id : postit_id},
                success: function(data) {
                  alert('Post-it envoyé !!!');
                  $item.remove();
                }
              });
        }
    });