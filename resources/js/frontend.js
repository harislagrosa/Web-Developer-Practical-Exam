
$(function() {

    $(document).on('change', '#current_color', function() {
        if (this.value == "Blue") {
            $("#current").attr("src", "/storage/cars/blue.png");
        }
        if (this.value == "Red") {
            $("#current").attr("src", "/storage/cars/red.png");
        }
        if (this.value == "Green") {
            $("#current").attr("src", "/storage/cars/green.png");
        }
    });

    $(document).on('change', '#target_color', function() {
        if (this.value == "Blue") {
            $("#target").attr("src", "/storage/cars/blue.png");
        }
        if (this.value == "Red") {
            $("#target").attr("src", "/storage/cars/red.png");
        }
        if (this.value == "Green") {
            $("#target").attr("src", "/storage/cars/green.png");
        }
    });

    $(document).on('click', '.complete-status', function() {
        if (confirm("Complete the car status?")) {
            $.ajax({
                url: "/cars/update",
                type: 'POST',
                data: {
                    id: this.value
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(data) {
                    if (data == 'success') {
                        location.reload();
                    }
                },
            });
        }
    });

})
