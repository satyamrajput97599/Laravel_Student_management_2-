<x-nav/>
<center style="background-color: forestgreen"><h1>Welcome to Faculty Page</h1></center>
<br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color: rgb(250, 98, 22)">
        <form action="">
            ID
            <input type="text" name="id" class="form-control" value="{{$data['id']}}"><br>
            Name
            <input type="text" name="n" class="form-control" value="{{$data['name']}}"><br>
            Contact
            <input type="text" name="c" class="form-control" value="{{$data['contact']}}"><br>
            Address
            <input type="text" name="a" class="form-control" value="{{$data['address']}}"><br>

            <input type="submit" name="submit" value="Update" class="btn btn-danger">
        </form>
    </div>
</div>