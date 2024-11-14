<footer>
    <div class="footer clearfix mb-0 text-muted">
        <!-- <div class="float-start">
            <p>{{ date('Y') }} &copy; Developed By
                <a href="https://github.com/Evdigi-INA" target="_blank">NDMA -</a> &
               <a href="https://github.com/Zzzul" target="_blank">Mohammad Zulfahmi</a>
            </p>
        </div>
        <div class="float-end">
            <p>Mazer Template by
                <a href="https://github.com/zuramai/mazer" target="_blank">Ahmad Saugi</a>
            </p>
        </div> -->
    </div>
</footer>
</div>
<script src="{{ asset('mazer') }}/static/js/components/dark.js"></script>
<script src="{{ asset('mazer') }}/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="{{ asset('mazer') }}/compiled/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#brand-id').select2({
            placeholder: "-- {{ __('Select brand') }} --",
            allowClear: true
        });
        $('#issue_to').select2({
            placeholder: "-- {{ __('Select sdsd') }} --",
            allowClear: true
        });
    });


    // $(document).ready(function() {
    //     $('#item-id').change(function() {
    //         var itemId = $(this).val();

    //         // Check if an item is selected
    //         if (itemId) {
    //             $.ajax({
    //                 url: '/fetch-issue-details', // Route to handle the AJAX request
    //                 type: 'GET',
    //                 data: {
    //                     item_id: itemId
    //                 },
    //                 success: function(response) {
    //                     // Check if issue details are returned
    //                     if (response.issue) {
    //                         $('#issue-to').text(response.issue.issue_to);
    //                         $('#returned-by').val(response.issue.issue_to);
                            
    //                         $('#issue-date').text(response.issue.issue_date);
    //                         $('#issue-details').show();
    //                     } else {
    //                         $('#issue-details').hide(); // Hide if no data is returned
    //                     }
    //                 },
    //                 error: function() {
    //                     alert('Failed to fetch issue details');
    //                 }
    //             });
    //         } else {
    //             $('#issue-details').hide();
    //         }
    //     });
    // });

    
    $(document).ready(function() {
        $('#item-id').change(function() {
            var itemId = $(this).val();

            if (itemId) {
                $.ajax({
                    url: '/fetch-issue-details',
                    type: 'GET',
                    data: { item_id: itemId },
                    success: function(response) {
                        if (response.issue) {
                            $('#issue-to').text(response.employee_name);  // Show employee name instead of issue_to ID
                            $('#issue-date').text(response.issue.issue_date);
                            $('#returned-by').val(response.issue.issue_to);  
                            $('#issue-details').show();
                        } else {
                            $('#issue-details').hide();
                        }
                    },
                    error: function() {
                        alert('Failed to fetch issue details');
                    }
                });
            } else {
                $('#issue-details').hide();
            }
        });
    });



</script>
@stack('js')
</body>

</html>