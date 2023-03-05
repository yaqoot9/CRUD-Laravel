<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div >
        <a href="{{url('/posts/create')}}" class="btn btn-primary">Create Table</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
       @forelse ($post as $item)

       <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->Title}}</td>
        <td class="d-flex">
            <a href="{{url('posts/edit',$item->id )}}"  class="btn btn-sm btn-success">Edit</a>
        </td>
<td >
       <form method="post" action="{{url('posts/delete',$item->id)}}">
         @csrf
         @method('delete')
         <button class="btn-sm btn-danger">Delete</button>
       </form>
</td>
      </tr>

       @empty
       <td>Not Found</td>

       @endforelse



        </tbody>
      </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
