@extends('frontend.master')


@section('content')


<h2> Select your Category type</h2>
<div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
      Annual Reports
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      Books or Educational Materials
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      Certificates
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      Cards(ATM/Dedit/Credit any kind of Cards)
    </label>
     </div>

     <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Garments Products

        </label>
         </div>

         <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Garments Products

            </label>
             </div>

             <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Machinary Products

                </label>
                 </div>

                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Medicine Products

                    </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Gift Items

                        </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Home accessories

                            </label>
                             </div>




         <h3>Select Destination</h3>

         <form>

            <div class="form-group">
              <label for="exampleFormControlSelect1">From</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Dhaka</option>
                <option>Chattogram</option>
                <option>Sylhet </option>
                <option>Rajshahi </option>
                <option>Barishal </option>
                <option>Khulna </option>
                <option>Rongpur </option>
                <option>Mymensingh </option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">From</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Dhaka</option>
                <option>Chattogram</option>
                <option>Sylhet </option>
                <option>Rajshahi </option>
                <option>Barishal </option>
                <option>Khulna </option>
                <option>Rongpur </option>
                <option>Mymensingh </option>
              </select>
            </div>












              </select>
            </div>
            <h4>WEIGHT</h4>


            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Weight</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>1KG</option>
                  <option>2KG TO 10KG</option>
                  <option>11KG TO 20KG </option>
                  <option>21KG TO 30KG </option>
                  <option>31KG TO 40KG </option>
                  <option>41KG TO 50KG </option>
                  <option>51KG TO 60KG </option>
                  <option>61KG TO 70KG </option>
                  <option>71KG TO 80KG </option>
                  <option>81KG TO 90KG </option>
                  <option>91KG TO 100KG </option>


                </select>
              </div>
              <h5>Price </h5>


              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                  </label>
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Submit and to the next page</button>
            </form>





          </form>









  </div>








@endsection
