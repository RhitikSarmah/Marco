<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Enquiry</th>
      </tr>
    </thead>
    <tbody>
      @foreach($form as $formdata)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$formdata->name}}</td>
        <td>{{$formdata->phone}}</td>
        <td>{{$formdata->email}}</td>
        <td>{{$formdata->enquiry}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
