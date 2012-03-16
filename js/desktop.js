    $(function() {
        // there's the gallery and the trash
        var $gallery = $( "#gallery" ),
            $trash = $( "#trash" ),
            $bin = $( "#bin" );

        // let the gallery items be draggable
        $( "li", $gallery ).draggable({
            cancel: "a.ui-icon", // clicking an icon won't initiate dragging
            revert: "invalid", // when not dropped, the item will revert back to its initial position
            containment: $( "#demo-frame" ).length ? "#demo-frame" : "document", // stick to demo-frame if present
            helper: "clone",
            cursor: "move"
        });

        // let the trash be droppable, accepting the gallery items
        $trash.droppable({
            accept: "#gallery > li",
            activeClass: "ui-state-highlight",
            drop: function( event, ui ) {
                stockImage( ui.draggable );
            }
        });
        
        $bin.droppable({
            accept: "#gallery > li",
            activeClass: "ui-state-highlight",
            drop: function( event, ui ) {
                deleteImage( ui.draggable );
            }
        });
        
        
        // let the gallery be droppable as well, accepting items from the trash
        $gallery.droppable({
            accept: "#trash li",
            activeClass: "custom-state-active",
            drop: function( event, ui ) {
                recycleImage( ui.draggable );
            }
        });

        function deleteImage( $item ) {
            $item.fadeOut(function() {
                var $list = $( "ul", $bin ).length ?
                    $( "ul", $bin ) :
                    $( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $bin );

                $item.find( "a.ui-icon-trash" ).remove();
                $item.append( recycle_icon ).appendTo( $list ).fadeOut(function() {
                    $item
                        .remove();
                });
            });
        }
              
        // image stock function
        var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Retourne sur le bureau</a>";
        function stockImage( $item ) {
            $item.fadeOut(function() {
                var $list = $( "ul", $trash ).length ?
                    $( "ul", $trash ) :
                    $( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $trash );

                $item.find( "a.ui-icon-trash" ).remove();
                $item.append( recycle_icon ).appendTo( $list ).fadeIn(function() {
                    $item
                        .animate({ width: "48px" })
                        .find( "img" )
                            .animate({ height: "36px" });
                });
            });
        }

        // image recycle function
        function recycleImage( $item ) {
            $item.fadeOut(function() {
                $item
                    .find( "a.ui-icon-refresh" )
                        .remove()
                    .end()
                    .css( "width", "96px")
                    .find( "img" )
                        .css( "height", "72px" )
                    .end()
                    .appendTo( $gallery )
                    .fadeIn();
            });
        }

        // image preview function, demonstrating the ui.dialog used as a modal window
        function viewLargerImage( $link ) {
            var src = $link.attr( "href" ),
                title = $link.siblings( "img" ).attr( "alt" ),
                $modal = $( "img[src$='" + src + "']" );

            if ( $modal.length ) {
                $modal.dialog( "open" );
            } else {
                var img = $( "<img alt='" + title + "' width='384' height='288' style='display: none; padding: 8px;' />" )
                    .attr( "src", src ).appendTo( "body" );
                setTimeout(function() {
                    img.dialog({
                        title: title,
                        width: 400,
                        modal: true
                    });
                }, 1 );
            }
        }

        // resolve the icons behavior with event delegation
        $( "ul.gallery > li" ).click(function( event ) {
            var $item = $( this ),
                $target = $( event.target );

            if ( $target.is( "a.ui-icon-trash" ) ) {
                stockImage( $item );
            } else if ( $target.is( "a.ui-icon-zoomin" ) ) {
                viewLargerImage( $target );
            } else if ( $target.is( "a.ui-icon-refresh" ) ) {
                recycleImage( $item );
            } else if ( $target.is( "a.ui-icon-delete" ) ) {
                deleteImage( $item );
            }

            return false;
        });
              
        $( "a.ui-icon-plus" ).click(function( event ) {
            var userId = $('input[name="desktop_id"]').val();
            
            $.ajax({
                url: '/desktop/index/' + userId,
                success: function(data) {
                  $('#dalia').html(data);
                }
              });
        });
       
        $( "a.ui-icon-moins" ).click(function( event ) {
            $.ajax({
                type: "POST",
                url: '/desktops',
                success: function(data) {
                  $('#dalia').html(data);
                }
              });
        });
        
        
    });
    
 function seeDesktop(userId){
     $.ajax({
        url: '/desktop/index/' + userId,
        success: function(data) {
          $('#dalia').html(data);
        }
      });
    }    

    
 function addPostIt(desktopId){
     $.ajax({
        url: '/postit/add/' + desktopId,
        success: function(data) {
          $('#dalia').html(data);
        }
      });
    }        
