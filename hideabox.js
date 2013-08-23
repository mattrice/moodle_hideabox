        $(document).ready(function() {
                //hide all hideabox contents after the page loads
                $('.hideabox .boxhidden').hide();

                //prep the toggle action
                $('.hideabox .toggle').click(function() {
                          // grab the toggle link's parent container, then hide/show the hidden stuff
                          $(this).closest('.hideabox').find('.boxhidden').toggle('fast');

                         // don't actually go to the link
                          return false;

                 });

         });
