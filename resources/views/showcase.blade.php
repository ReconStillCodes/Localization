<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
    <title>Showcase</title>
</head>
<body class="container p-5">
    <h2 class="text-center mb-4">{{__('message.showcaseTitle')}}</h2>
    @foreach ($forms as $form)
        <div class="card h-100 shadow-sm my-3">
            <div class="card-header bg-primary text-white text-center">
                <h4>{{$form->name}}</h4>
            </div>
            <div class="card-body ">
                <p><strong>{{__('message.emailLabel')}}:</strong> {{ $form->email }}</p>
                <p><strong>{{__('message.ageLabel')}}:</strong> {{ $form->age }}</p>
                 <p><strong>{{__('message.addressLabel')}}:</strong> {{ $form->address }}</p>
            </div>
        </div>
    @endforeach

    <form action="{{route('form')}}" method="GET">
        @csrf
        <button type="submit" class="btn btn-primary mt-4">{{__('message.back')}}</button>
    </form>
    <script src="/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>