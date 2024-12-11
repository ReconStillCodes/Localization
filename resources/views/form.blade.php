<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
    <title>Form</title>
</head>
<body>
    
    <form class="form-group container p-5" action="{{route("submit")}}" method="post">
        @csrf
        <h2 class="text-center mb-4">@lang('message.formTitle')</h2>
        <p>Current locale: {{ App::getLocale() }}</p>
        <div class="mb-3">
            <label for="name" class="form-label">{{__('message.nameLabel')}}</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="{{__('message.namePlaceholder')}}" required>
        </div>

         <div class="mb-3">
            <label for="email" class="form-label">{{__('message.emailLabel')}}</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="{{__('message.emailPlaceholder')}}" required>
        </div>


        <div class="mb-3">
            <label for="age" class="form-label">{{__('message.ageLabel')}}</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="{{__('message.agePlaceholder')}}" required>
        </div>
  
        <div class="mb-3">
            <label for="address" class="form-label">{{__('message.addressLabel')}}</label>
           <textarea class="form-control" id="address" name="address" rows="6" placeholder="{{__('message.addressPlaceholder')}}"></textarea>
        </div>
    
        <button type="submit" class="btn btn-primary">{{__('message.submit')}}</button>
    </form>
</html>