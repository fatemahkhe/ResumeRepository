<section name="basicInfo" id="basicInfo" class="basicInfo">
    <div class="section-title">
        <h2>Resume</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>
<div class="row" data-aos="fade-in">
    <div class="col-lg-12">
        <form method="POST" action="">
            <div class="row">
                <div class="form-group">
                    <label for="bdField">Breif Description</label>
                    <input  type="text" id="bdField" placeholder="enter here" name="briefDescription" class="form-control" value="{{old('briefDescription',$user_infos->fname?? null)}}" />
                </div> 
            </div>
            <div class="row ">
                <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="enter here" class="form-control" value="{{old('fname')}}" />
                </div>
                <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="enter here" class="form-control" value="{{old('lname')}}" />
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="birthdate">birthdate</label>
                    <input type="date" id="birthdate" name="birthdate" placeholder="enter here" class="form-control" value="{{old('birthdate')}}" />
                </div>
                <div class="form-group col-md-6">
                    <label for="addressField">Address</label>
                    <input type="text" id="address" name="address" placeholder="enter here" class="form-control" value="{{old('address')}}" />
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="contactField">Phone</label>
                    <input type="text" id="phone" name="phone" placeholder="enter your phone here" class="form-control" value="{{old('phone')}}" />
                </div>
                <div class="form-group col-md-6">
                    <label for="contactField">Gender</label>
                    <input type="text" id="phone" name="phone" placeholder="enter your phone here" class="form-control" value="{{old('phone')}}" />
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <button type="submit">submit</button>
                </div>
                <div class="form-group col-md-3">
                    <button type="reset">Reset</button>
                </div>
                <div class="form-group col-md-3">
                    <button type="reset">Reset</button>
                </div>
                <div class="form-group col-md-3">
                    <button type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
</section>
