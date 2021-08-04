<div id="step1">
    <form>
        <div class="row">
        <div class="col-xs-12">
            <label>Hotel</label>
            <input class="input" id="form-hotel" name="Hotel" placeholder="Select your hotel"/>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
            <label>Service</label>
            <select id="form-service" name="Service">
            <option date="One Way" value="One Way">One Way</option>
            <option data="Round Trip" value="Round Trip">Round Trip</option>
            </select>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12" id="only-oneway">
            <label>Departure</label>
            <select id="form-destination" name="Destination">
            <option data="Airport - Hotel" value="Airport - Hotel">From Airport to Hotel</option>
            <option data="Hotel - Airport" value="Hotel - Airport">From Hotel to Airport</option>
            </select>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
            <input class="submit-button" id="send-prebook" type="button" name="SEND" value="SEND" disabled="disabled"/>
        </div>
        </div>
    </form>
</div>
<div id="step2">
    <form>
        <div class="row">
            <div class="col-xs-6">
                <label>Full Name</label>
                <input class="input" id="form-name" type="text" name="name" placeholder="Full Name"/>
            </div>
            <div class="col-xs-6">
                <label>Email</label>
                <input class="input" id="form-email" type="text" name="email" placeholder="Email"/>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <label>Phone</label>
                <input class="input" id="form-phone" type="phone" name="phone" placeholder="Phone"/>
            </div>
            <div class="col-xs-6" id="suburban-capacity">
                <label>Pax</label>
                <select id="form-passengers-suburban">
                <option name="passengers" value="1">1 Passenger</option>
                <option name="passengers" value="2">2 Passengers</option>
                <option name="passengers" value="3">3 Passengers</option>
                <option name="passengers" value="4">4 Passengers</option>
                <option name="passengers" value="5">5 Passengers</option>
                <option name="passengers" value="6">6 Passengers</option>
                </select>
            </div>
            <div class="col-xs-6" id="hiace-capacity">
                <label>Pax</label>
                <select id="form-passengers-hiace">
                <option name="passengers" value="1">1 Passenger</option>
                <option name="passengers" value="2">2 Passengers</option>
                <option name="passengers" value="3">3 Passengers</option>
                <option name="passengers" value="4">4 Passengers</option>
                <option name="passengers" value="5">5 Passengers</option>
                <option name="passengers" value="6">6 Passengers</option>
                <option name="passengers" value="7">7 Passengers</option>
                <option name="passengers" value="8">8 Passengers</option>
                <option name="passengers" value="9">9 Passengers</option>
                <option name="passengers" value="10">10 Passengers</option>
                </select>
            </div>
            <div class="col-xs-6" id="sprinter-capacity">
                <label>Pax</label>
                <select id="form-passengers-sprinter">
                <option name="passengers" value="1">1 Passenger</option>
                <option name="passengers" value="2">2 Passengers</option>
                <option name="passengers" value="3">3 Passengers</option>
                <option name="passengers" value="4">4 Passengers</option>
                <option name="passengers" value="5">5 Passengers</option>
                <option name="passengers" value="6">6 Passengers</option>
                <option name="passengers" value="7">7 Passengers</option>
                <option name="passengers" value="8">8 Passengers</option>
                <option name="passengers" value="9">9 Passengers</option>
                <option name="passengers" value="10">10 Passengers</option>
                <option name="passengers" value="11">11 Passengers</option>
                <option name="passengers" value="12">12 Passengers</option>
                <option name="passengers" value="13">13 Passengers</option>
                <option name="passengers" value="14">14 Passengers</option>
                <option name="passengers" value="15">15 Passengers</option>
                <option name="passengers" value="16">16 Passengers</option>
                <option name="passengers" value="17">17 Passengers</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6">
                <div class="form-check">
                    <label class="form-check-label" for="form-babysit">
                      Baby Chair (20usd extra)
                    </label>
                    <input class="form-check-input" id="form-babysit" type="checkbox" name="babysit">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-check">
                    <label class="form-check-label" for="form-shoppingstop">
                      Shopping Stop(20usd extra)
                    </label>
                    <input class="form-check-input" id="form-shoppingstop" type="checkbox" name="shoppingstop">
                </div>
            </div>
        </div>


        <div class="row-group" id="arrival">
            <div class="row" id="arrival-info">
                <div class="col-xs-12 text-center">
                <h3>Arrival Information</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                <label>Date</label>
                <input class="input" id="form-arrival-date" type="date" name="arrivaldate"/>
                </div>
                <div class="col-xs-6">
                <label>Time</label>
                <input class="input" id="form-arrival-time" type="time" name="arrivaltime"/>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                <label>Airline</label>
                <input class="input" id="form-arrival-airline"/>
                </div>
                <div class="col-xs-6">
                <label>Flight #</label>
                <input class="input" id="form-arrival-flight" type="text" name="arrivalflight" placeholder="Flight"/>
                </div>
            </div>
        </div>

        <div class="row-group" id="departure">
            <div class="row roundtrip">
                <div class="col-xs-12 text-center">
                <h3 id="departure-info">Departure Information</h3>
                </div>
            </div>
            <div class="row roundtrip">
                <div class="col-xs-6">
                <label>Date</label>
                <input class="input" id="form-departure-date" type="date" name="departuredate"/>
                </div>
                <div class="col-xs-6">
                <label>Time</label>
                <input class="input" id="form-departure-time" type="time" name="departuretime"/>
                </div>
            </div>
            <div class="row roundtrip">
                <div class="col-xs-6">
                <label>Airline</label>
                <input class="input" id="form-departure-airline"/>
                </div>
                <div class="col-xs-6">
                <label>Flight #</label>
                <input class="input" id="form-departure-flight" type="text" name="departureflight" placeholder="Flight"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <label>Ocation</label>
                <select id="form-ocation"></select>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <label>Comments</label>
                <textarea id="form-comment" name="comments" placeholder="Comments"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <input class="submit-button" id="send-mail" type="button" name="SEND" value="SEND"/>
            </div>
        </div>

        <input type="hidden" name="origin" id="form-origin" value="web">
    </form>
</div>
<div id="step3">
    <div class="row no-margin">
        <div class="col-xs-12">
        <h2 class="text-center">Thanks for choosing us!</h2>
        <h3 class="text-center">You can pay in cash when you arrive onboard our unit.</h3>
        </div>
        <div class="col-xs-12 text-center">
        <p>Pay cash </p>
        <p id="priceBig2"></p>
        </div>
    </div>
</div>
