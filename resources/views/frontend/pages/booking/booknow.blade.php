@extends('frontend.master')
@section('title', 'Booking')
@section('content')
    <div class="container-fluid bg-secondary my-5">
        <div class="container">

            <div class="bg-primary py-5 px-4 px-sm-5">
                @if ($errors->any())

                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach

                @endif
                <form action="{{ route('booking.store') }}" class="row" method="POST">
                    @csrf

                    <div class="col-md-6">
                        <h1>Sender Details</h1>
                        <div class="form-group">
                            <input type="text" value="{{ $user->name }}" name="sender_name"
                                class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="sender_email" value="{{ $user->email }}"
                                class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="tel" name="sender_contact" value="{{ $user->contact }}"
                                class="form-control border-0 p-4" placeholder="Your Contact" required="required" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" style="height: 57px;" name="sender_location" required>
                                <option value="" selected>- -your location--</option>
                                @foreach ($location as $row)
                                    <option value="{{ $row->name }}">{{ $row->name }}</option>
                                @endforeach
                            </select>


                        </div>
                        <div class="form-group">

                            <textarea class="form-control" name="sender_address" id="" placeholder="Your Address" cols="10"
                                rows="5" required>{{ $user->address }}</textarea>

                        </div>

                    </div>


                    <div class="col-md-6">
                        <h1>Receiver Details</h1>
                        <div class="form-group">
                            <input type="text" name="receiver_name" class="form-control border-0 p-4"
                                placeholder="Receiver Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="receiver_email" class="form-control border-0 p-4"
                                placeholder="Receiver Email" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="tel" name="receiver_contact" class="form-control border-0 p-4"
                                placeholder="Receiver Contact" required="required" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" style="height: 57px;" name="receiver_location" required>
                                <option value="" selected>--receiver location--</option>
                                @foreach ($location as $row)
                                    <option value="{{ $row->name }}">{{ $row->name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">

                            <textarea class="form-control" name="receiver_address" placeholder="Receiver Address" cols="10" rows="5"
                                required></textarea>
                        </div>

                    </div>
                    <div class="col-12">
                        <h1>Booking Details</h1>
                    </div>
                    <div class="col-md-6">


                        <div class="form-group">
                            <input type="number" name="quantity" class="form-control border-0 p-4"
                                placeholder="Courier quantity" required="required" />
                        </div>


                        <div class="form-group">
                            <select class="form-control" style="height: 57px;" name="category_type" required>
                                <option value="" selected>-------select category-------</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->Name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div id="allweight" data-weight="{{ $weight }}">

                            </div>
                            <select class="custom-select border-0 px-4 from-control" style="height: 57px;" id="sweight"
                                name="weight_range" required>
                                <option value="" selected>-------select weight range-------</option>
                                @foreach ($weight as $data)
                                    <option value="{{ $data->id }}">{{ $data->Weight_range }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label class="text-dark" for="price">Amout {!! env('CURRENCY') !!}</label>
                                <input type="number" id="price" name="price" class="form-control border-0 p-4"
                                    placeholder="price" required="required" readonly />
                            </div>
                            <div class="form-group col-6">
                                <label class="text-dark" for="price">Vehicle</label>
                                <input type="text" id="vehicle" name="vehicle" class="form-control border-0 p-4"
                                    value="Bike" required="required" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div id="riders" data-rider="{{ $rider }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group mx-2">
                                            <label for="date" class="text-dark">Date</label>
                                            <input id="datetime" type="date" class="form-control" name="date"
                                                required>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" id="time_range">
                                        <label for="time" class="text-dark">Time Slot</label>
                                        <select name="time_slot" onchange="getRider()" class="form-control"
                                            id="timeslot">
                                            <option value="">Select Time</option>
                                            <option value="09AM-3PM">
                                                09 AM - 3PM
                                            </option>
                                            <option value="3PM-9PM">
                                                3PM - 9AM
                                            </option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div id="result" class="mt-3"></div>
                            <div class="mb-4">
                                <p class="text-dark">
                                    <b>Rider</b>
                                </p>
                                <input type="hidden" id="rider_id" name="rider_id">

                                <div id="riderDetails" class="border rounded p-2 text-dark ">

                                </div>
                            </div>


                            {{-- <div class="mb-2">
                           <label for="rider" class="text-dark"><b>Rider</b></label>
                            <input hidden type="text" id="vehicle" name="rider_id" class="form-control border-0 p-4"
                                value="{{$rider->id}}" required="required" readonly />
                            <div class="border p-2">
                                <h5 class="text-white">{{$rider->name}}</h5>
                                
                            </div>
                        </div> --}}
                            <div class="form-group">
                                <textarea class="form-control" name="description" id="" placeholder="Courier description" cols="10"
                                    rows="5"></textarea>

                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">
                                    Booking
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('extra-script')
    <script>
        const weight = document.getElementById('allweight').getAttribute('data-weight');
        var allWeight = JSON.parse(weight);
        var dropdown = document.getElementById("sweight");
        var price = document.getElementById("price");
        var vehicle = document.getElementById("vehicle");
        let timeSlot = document.getElementById('timeslot');
        // riders 
        const allriders = document.getElementById('riders').getAttribute('data-rider');
        var riders = JSON.parse(allriders);
        var riderDetails = document.getElementById('riderDetails');
        var riderID = document.getElementById('rider_id');
        // time_range
        var time_range = document.getElementById('time_range');

        // Add an event listener for the 'change' event
        dropdown.addEventListener("change", function() {
            // Get the selected option
            var selectedOption = dropdown.options[dropdown.selectedIndex];

            // Get the value of the selected option
            var selectedValue = selectedOption.value;
            const selectedData = allWeight.find(weight => weight.id == parseInt(selectedValue));

            price.value = selectedData.Price;

            // update vehicle based on weight
            const matches = selectedData.Weight_range.match(/\d+/g);

            // If matches exist, get the first number
            const extractedNumber = matches ? parseInt(matches[0]) : null;

            if (extractedNumber >= 20) {
                vehicle.value = 'Truck';

                var indicesToRemove = [0,1, 2]; // Change these indices based on your requirement

                // Remove options in reverse order to avoid index shifting
                for (var i = indicesToRemove.length - 1; i >= 0; i--) {
                    var indexToRemove = indicesToRemove[i];
                    // Ensure the index is valid before removing
                    if (indexToRemove >= 0 && indexToRemove < timeSlot.options.length) {
                        timeSlot.remove(indexToRemove);
                    }
                }

                const truckOption = document.createElement('option');
                truckOption.value = '09AM-04PM';
                truckOption.text = '09 AM-04 PM';
                timeSlot.appendChild(truckOption);
                // set rider
                setRider(riders);
            } else {
                vehicle.value = 'Bike';
                timeSlot.value = '';
                timeSlot.innerHTML = `
                <option value="">Select Time</option>
                <option value="09AM-3PM">09 AM - 3PM
                </option>
                <option value="3PM-9PM">
                3PM - 9AM
                </option>
    `;

                setRider([]);
            }

        });


        function getRider() {

            // Get the value from the datetime-local input

            const slot = timeSlot.value

            // filter riders based on hour
            const filterRider = riders.filter((rider) => rider.duty_time.toLocaleUpperCase() === slot.toLocaleUpperCase());
            setRider(filterRider);

        }

        function setRider(allriders) {
            const getARider = allriders[Math.floor(Math.random() * allriders.length)];
            if (getARider) {
                riderID.value = getARider.id
                riderDetails.innerHTML = `<h5>${getARider.name}</h5>
                                    <div><small>${getARider.phone}</small>
                                        <br>
                                        <small>${getARider.email}</small>
                                    </div>`
            } else {
                riderDetails.innerHTML = `<h3>No Rider Found</h3>`
            }
        }
    </script>
@endpush
