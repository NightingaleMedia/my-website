import {
  addSubmit
} from './builder.js'

class RenderedForm {
  constructor(obj) {
 
    this.wrapper = document.createElement('div');
    this.wrapper.innerHTML = formHTML(obj).toString();

  }
  render() {
    return this.wrapper;
  }
}

function formHTML(obj){
  // find the matched value and put the form value
  return (
    `
<main>
    <div class="main-form">
      <form action="#" method="POST">
        <section class="section--header" data-name="header">
          <div class="container">
            <div class="row">
              <div class="col-md-6 d-none d-sm-block">
                <div class="logo-holder">

                </div>
              </div>
              <div class="col-md-6">
                <div class="form--header">
                  <h3 class="confirm">Confirm Your Order</h3>
                  <p>www.cleanlites.com | p. 513-641-4155</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="container-fluid">
          <div class="row">
            <section class="section--contact col-md-6" data-name="Billing">

              <input type="text" name="billingCompany" placeholder="Billing Company">
              <input type="text" name="billingAddress" placeholder="Address">

              <div class="city-state">
                <input class="city" type="text" name="billingCity" >
                <input class="state" type="text" name="billingState" >
                <input class="zip" type="text" name="billingZip" >
              </div>

              <input type="text" name="billingContactName" >
              <input type="text" name="billingPhone" ><br>
           
              <input type="text" name="billingEmail" >
              <div class="pickup-delivery">
                <input type="radio" value="pickup" id="radioOne" name="orderType" checked />
                <label for="radioOne" class="radio">Pickup</label>
                <input type="radio" value="dropoff" id="radioTwo" name="orderType" />
                <label for="radioTwo" class="radio">Delivery</label>

            </section>
            <section class="section--generator col-md-6" data-name="Generator">


              <input type="text" name="generatorCompany" placeholder="Generator">
              <input type="text" name="generatorAddress" placeholder="Address">

              <div class="city-state">
                <input class="city" type="text" name="generatorCity" placeholder="City">
                <input class="state" type="text" name="generatorState" placeholder="State">
                <input class="zip" type="text" name="generatorZip" placeholder="Zip">
              </div>
              <input type="text" name="generatorContactName" placeholder="Contact Name">
              <input type="text" name="generatorPhone" placeholder="Phone">
              <input type="text" name="poNumber" placeholder="PO Number">


            </section>
          </div>
        </div>
        <section class="section--material" data-name="materials">

          <div class="material-section--title" data-name="Materials">Materials</div>
          <!--=========== Lamps for Recycling =============-->
          <div class="material--lamps" data-name="Lamps">
            <div class="material--title">
              <h3>Lamps</h3>
            </div>
            <label><span>4ft & Under</span></label>
            <input type="text" name="4ftUnder">
            <label>8ft & Over</label>
            <input type="text" name="8ftOver">
            <label>CFL</label>
            <input type="text" name="CFL">
            <label>Incandescent</label>
            <input type="text" name="incandescent">
            <label>U-Bend</label>
            <input type="text" name="uBend">
            <label>HIDs</label>
            <input type="text" name="HIDs">
            <label>LEDs</label>
            <input type="text" name="LEDs">
            <label>Other</label>
            <input type="text" name="lampsOther">
          </div>
          <div class="material--ballast" data-name="Ballast">
            <div class="material--title">
              <h3>Ballast</h3>
            </div>
            <label><span>Ballasts</span></label>
            <input type="text" name="ballast_ballasts">
            <label>Capacitors</label>
            <input type="text" name="ballast_capacitors">
            <label><span>Other 1</span></label>
            <input type="text" name="ballast_other1">
            <label>Other 2</label>
            <input type="text" name="ballast_other2">
          </div>

          <!--=========== eWaste for Recycling =============-->
          <!--=========== eWaste END Recycling =============-->
          <!--=========== BALLAST for Recycling =============-->

          <div class="material--batteries" data-name="Batteries">
            <div class="material--title">
              <h3>Batteries</h3>
            </div>
            <label><span>Nickel Cadmium</span></label>
            <input type="text" name="batteries_niCad">
            <label>Nickel Metal Hydride</label>
            <input type="text" name="batteries_niMh">
            <label>Alkaline</label>
            <input type="text" name="batteries_alkaline">
            <label>Zinc Carbon</label>
            <input type="text" name="batteries_zincCarbon">
            <label><span>Zinc Air</span></label>
            <input type="text" name="batteries_zincAir">
            <label>Lead Acid Dry Cell</label>
            <input type="text" name="batteries_leadAcidDry">
            <label>Lead Acid Wet Cell</label>
            <input type="text" name="batteries_leadAcidWet">
            <label>Mercury</label>
            <input type="text" name="batteries_mercury">
            <label>Button Cell</label>
            <input type="text" name="batteries_buttonCell">
            <label>Lithium</label>
            <input type="text" name="batteries_lithium">
            <label>Lithium Ion</label>
            <input type="text" name="batteries_lithiumIon">
            <label>Magnesium</label>
            <input type="text" name="batteries_magnesium">
            <label>Co-Mingled</label>
            <input type="text" name="batteries_coMingled">
            <label>Other 1</label>
            <input type="text" name="batteries_other1">
            <label>Other 2</label>
            <input type="text" name="batteries_other2">
          </div>
          <div class="material--eWaste" data-name="eWaste">
            <div class="material--title">
              <h3>eWaste</h3>
            </div>

            <label><span>Monitors</span></label>
            <input type="text" name="monitors">
            <label>Keyboards</label>
            <input type="text" name="keyboards">
            <label>Hard Drives</label>
            <input type="text" name="hardDrives">
            <label>Printers</label>
            <input type="text" name="printers">
            <label>Other 1</label>
            <input type="text" name="other1">
            <label>Other 2</label>
            <input type="text" name="other2">
          </div>
          <div class="material--specialty" data-name="Specialty">
            <div class="material--title">
              <h3>Specialty</h3>
            </div>
            <label><span>Airbag Devices</span></label>
            <input type="text" name="special_airbag">
            <label>Solar Panels</label>
            <input type="text" name="special_solarPanels">
          </div>

          <!--=========== BALLAST END Recycling =============-->
          <!--=========== Hazardous for Recycling =============-->

          <div class="material--haz" data-name="Hazardous">
            <div class="material--title">
              <h3>Hazardous / Other</h3>
            </div>
            <label><span>HG Devices</span></label>
            <input type="text" name="HG_devices">
            <label>Fixtures</label>
            <input type="text" name="HG_fixtures">
            <label>Toners</label>
            <input type="text" name="HG_toners">
            <label>Transformers</label>
            <input type="text" name="HG_transformers">
            <label>PCB Containing</label>
            <input type="text" name="HG_pcbContaining">
            <label>Other 1</label>
            <input type="text" name="HG_other1">
            <label>Other 2</label>
            <input type="text" name="HG_other2">
            <label>Other 3</label>
            <input type="text" name="HG_other3">
            <label>Other 4</label>
            <input type="text" name="HG_other4">


          </div>
        </section>

        <section class="section--containers" data-name="containers">
          <div class="section--title">Containers</div>
          <div class="container-fluid">
            <div class="row container--content">
              <div class="col-md-3 col-sm-6 px-0">
                <label>4ft Boxes</label>
                <input type="text" name="containers_4ftBox" placeholder="Qty Needed">
                <label>8ft Boxes</label>
                <input type="text" name="containers_8ftBox" placeholder="Qty Needed">
                <label>U-bend Boxes</label>
                <input type="text" name="containers_uBendBox" placeholder="Qty Needed">
              </div>
              <div class="col-md-3 col-sm-6 px-0">
                <label>55 Gallon Drum</label>
                <input type="text" name="containers_55GallonDrums" placeholder="Qty Needed">
                <label>Poly Drums</label>
                <input type="text" name="containers_polyDrums" placeholder="Qty Needed">
                <label>5 Gallon Pail</label>
                <input type="text" name="containers_5GallonPail" placeholder="Qty Needed">
              </div>
              <div class="col-md-3 col-sm-6 px-0">
                <label>Cubic Yard Box</label>
                <input type="text" name="containers_gaylords" placeholder="Qty Needed">
                <label>Small Batt Box</label>
                <input type="text" name="containers_smallBatteryBox" placeholder="Qty Needed">
              </div>

              <div class="col-md-3 col-sm-6 px-0">
                <label>Other 1</label>
                <input type="text" name="containers_other1" placeholder="Qty Needed">
                <label>Other 2</label>
                <input type="text" name="containers_other2" placeholder="Qty Needed">
              </div>
              
            </div>
          </div>
        </section>
        <section class="section--site-info" data-name="siteInfo">
          <div class="section--title">Site Info</div>
          <div class="container-fluid">
            <div class="row site-info--row">
              <div class="col-sm-6">
                <label class="label-time" for="hoursForm">Hours</label>
                <select class="time-select" id="hoursForm" name="time-from">
                  <option selected>8:00 am</option>
                  <option>8:30 am</option>
                  <option>9:00 am</option>
                  <option>9:30 am</option>
                  <option>10:00 am</option>
                  <option>10:30 am</option>
                  <option>11:00 am</option>
                  <option>11:30 am</option>
                  <option>12:00 pm</option>
                  <option>12:30 pm</option>
                  <option>1:00 pm</option>
                  <option>1:30 pm</option>
                  <option>2:00 pm</option>
                  <option>2:30 pm</option>
                  <option>3:00 pm</option>
                  <option>3:30 pm</option>
                  <option>4:00 pm</option>
                  <option>4:30 pm</option>
                  <option>5:00 pm</option>
                  <option>5:30 pm</option>
                  <option>6:00 pm</option>
                  <option>Other (Specify Below)</option>
                </select>
                To
                <select class="time-select" name="time-to" id="inlineFormCustomSelect">
                  <option>9:00 am</option>
                  <option>9:30 am</option>
                  <option>10:00 am</option>
                  <option>10:30 am</option>
                  <option>11:00 am</option>
                  <option>11:30 am</option>
                  <option>12:00 pm</option>
                  <option>12:30 pm</option>
                  <option>1:00 pm</option>
                  <option>1:30 pm</option>
                  <option>2:00 pm</option>
                  <option>2:30 pm</option>
                  <option>3:00 pm</option>
                  <option>3:30 pm</option>
                  <option>4:00 pm</option>
                  <option>4:30 pm</option>
                  <option selected>5:00 pm</option>
                  <option>5:30 pm</option>
                  <option>6:00 pm</option>
                  <option>Other (Specify Below)</option>
                  <input class="" name="heightRestrictions" placeholder="Height Restrictions">
                  <input class="" name="noPallets" placeholder="# of Pallets">
                  <input class="" name="estWeight" >
                </select>
              </div>
              <div class="col-sm-6 site-info--checks">
              
              <label class="label-info" for="palletized">Items Palletized</label>
                <input type="checkbox" name="palletized" />

                 <label class="label-info" for="liftGate">Lift Gate Needed</label>
                <input type="checkbox" name="liftGate"/>

                 <label class="label-info" for="dock">Loading Dock Available</label>
                <input type="checkbox" name="dock"/>

                <label class="label-info" for="workersAvailable">Workers Available</label>
                <input type="checkbox"  value="false" id="workersAvailable" name="workersAvailable" />

                <label class="label-info" for="palletJack">Pallet Jack Available</label>
                <input type="checkbox" name="palletJack" />
            
                <label class="label-info" for="forklift">Forklift Available</label>
                <input type="checkbox" name="forklift" />
              
               
           

               
       

              </div>
              <div class="col-md-12">
                <label>Other Comments</label>
                <br>
                <textarea class="textarea" type="textarea" rows="2"></textarea>
              </div>
            </div>
          </div>

        </section>

      </form>
    </div>

  </main>
    <section class="section__submit">
    <button id="go-back">Go Back</button>
    <button id="submit-form">Submit</button>
    </section>
`
  )
}

export {
  RenderedForm
}
