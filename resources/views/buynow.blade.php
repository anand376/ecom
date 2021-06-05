@extends('master')
@section('content')
<div class="custom-product">
    
    <div class="col-sm-6">
        <table class="table table-striped">
           
            <tbody>
              <tr>
                <td>price</td>
                <td> {{$totalbuy}} Rupees</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>0 Rupees</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>100</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td> {{$totalbuy}} </td>
              </tr>
            </tbody>
          </table>
          <form method="post" action="orderplace" >
              @csrf
            <div class="form-group">
              <textarea placeholder="Enter Your Address" name="address" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Payment Method</label>
              <p><input type="radio" value="cash" name="payment"><span>Online Payment</span></P>
             <p><input type="radio" value="cash" name="payment"><span>Emi Payment</span></P>
              <p><input type="radio" value="cash" name="payment"><span>Payment On Delivery</span></P>
            </div>
            
            <button type="submit" class="btn btn-default">order Now</button>
          </form>

    </div>
</div>
@endsection