<div class="modal fade" id="listingModal" tabindex="-1" role="dialog" aria-labelledby="listingModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header px-lg-5">
                <h5 class="modal-title" id="listingModalLabel">Add Listing</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body px-lg-5">
                <form action="#">
                    <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="fullName">Full name</label>
                        <input class="form-control form-control-lg" id="fullName" type="text" name="fullname" placeholder="Your full name">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email">Email Address</label>
                        <input class="form-control form-control-lg" id="email" type="email" name="email" placeholder="Your email address">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="fullName">Listing Type</label>
                        <select class="selectpicker" id="listingType" name="listing-type" data-style="bs-select-form-control" data-title="What do you want to add" data-width="100%" required>
                        <option value="tool">Tool</option>
                        <option value="resource">Resource</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="istingTitle">Listing title</label>
                        <input class="form-control form-control-lg" id="istingTitle" type="text" name="listing-title" placeholder="Title of your title">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="listingUrl">Listing URL</label>
                        <input class="form-control form-control-lg" id="listingUrl" type="text" name="listing-url" placeholder="Listing website url">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="listingCategory">Listing category</label>
                        <select class="selectpicker" id="listingCategory" name="listing-category" data-style="bs-select-form-control" data-title="Select listing category" data-width="100%" required>
                        <option value="">Marketing</option>
                        <option value="">Idea generation</option>
                        <option value="">Idea generation</option>
                        <option value="">Design</option>
                        <option value="">Naming</option>
                        <option value="">Domain names</option>
                        <option value="">Sales</option>
                        <option value="">Finance</option>
                        <option value="">Project management</option>
                        <option value="">Hosting</option>
                        <option value="">Social tools</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="listingDescription">Listing description</label>
                        <textarea class="form-control form-control-lg" id="listingDescription" name="listing-description" rows="5" placeholder="Add a small brief about your listing."></textarea>
                    </div>
                    <div class="form-group col-lg-6 mb-lg-0">
                        <label for="listingThumb">Listing thumbnail</label>
                        <input class="form-control form-control-lg-2" id="listingThumb" type="file" name="listing-thumb">
                    </div>
                    <div class="form-group col-lg-6 mb-lg-0">
                        <label for="listingCover">Listing cover</label>
                        <input class="form-control form-control-lg-2" id="listingCover" type="file" name="listing-cover">
                    </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-start px-lg-5">
                <button class="btn btn-primary" type="submit">Submit listing</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>