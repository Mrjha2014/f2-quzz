 function submitForm() {
        var selectedOption = $('#select-action').val();
        var url = "";
        if(selectedOption == 'animals') {
            url = '{{ route('your/route')}}';
        } else if (selectedOption == 'flowers') {
            url = '{{ route('your/route')}}';
        }
        $('#myForm').attr('action', url);
        $('form#myForm').submit();
        return false;
    }
