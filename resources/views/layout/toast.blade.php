
    @if(session()->has('success'))
        $.toast({
        heading: 'Success',
        text: '{{ session()->get('success') }}',
        showHideTransition: 'slide',
        icon: 'success',
        loader: true,
        });
    @endif