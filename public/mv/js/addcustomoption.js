    $(document).ready(function() {
        // Handle the "Add" button click event
        $('#addVoteOption').click(function(e) {
            e.preventDefault(); // Prevent the default form submission

            var customOption = document.getElementById('customVoteOption').value;
            if (customOption !== '') {
                var selectElement = document.querySelector('select[name="voteby[]"]');
                var option = document.createElement('option');
                option.value = customOption;
                option.text = customOption;
                selectElement.add(option);
            }
            // Get the custom vote option value
            var customOption = $('#customVoteOption').val();
            console.log(customOption);
            // Perform AJAX request to submit the custom vote option
            $.ajax({
                url: "{{ route('voteby') }}", // Update with the appropriate URL
                method: 'POST',
                data: {
                    customVoteOption: customOption,
                    _token: '{{ csrf_token() }}' // Include the CSRF token
                },
                success: function(response) {
                    $('#customVoteOption').val('');
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });

    });