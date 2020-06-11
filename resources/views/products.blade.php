<!DOCTYPE html>
<html>
<body>

    <h1>product page</h1>
    <table>
    @foreach($prods as $data)
    <tr >
        <td><img src={{asset('images/'.$data->id.'.jpg')}}></td>
      <td style="border: 1px solid black">{{$data->productname}}</td>
      <td style="border: 1px solid black">{{$data->productprice}}</td>
      <td style="border: 1px solid black">{{$data->producttype}}</td>
      <td><img src={{asset('images/'.$data->id.'.jpg')}}></td>
    </tr>
    @endforeach
</table>

        <select class="form-control" name="lastname" id="lastname" data-parsley-required="true">
          @foreach ($types as $types)
          {
            <option value="{{ $types }}">{{ $types }}</option>
          }
          @endforeach
        </select>
</div>

</body>
</html>
