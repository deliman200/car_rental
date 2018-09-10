<!-- Modal -->
<div class="modal fade" id="selectReservation" tabindex="-1" role="dialog" aria-labelledby="selectReservationLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="selectReservationLabel">Reservation Transaction Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <table class="table table-sm table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Reservation ID</th>
              <th scope="col">Branch Name</th>
              <th scope="col">Customer Name</th>
              <th scope="col">Address</th>
              <th scope="col">Tel No.</th>
              <th scope="col">Cell No.</th>
              <th scope="col">Plate No.</th>
              <th scope="col">Vehicle Model</th>
              <th scope="col">Vehicle Make</th>
              <th scope="col">Transmission</th>
              <th scope="col">Vehicle Owner Type</th>
              <th scope="col">Vehicle Type</th>
            </tr>
          </thead>
          <tbody>
            <tr class='clickable-row' data-href="{{ URL::to('reservation') }}">
              <td>1</td>
              <td>81</td>
              <td>Cebu</td>
              <td>Danjovit Baldovino</td>
              <td>Upon Lapu2x Cebu</td>
              <td>4901234</td>
              <td>09123456789</td>
              <td>VFS567</td>
              <td>Vios</td>
              <td>Toyota</td>
              <td>Manual</td>
              <td>Safe Car Rental</td>
              <td>Compact Sedan</td>
            </tr>
          </tbody>
        </table>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>

</div>

	
@section('scripts')
  <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
  </script>
	
@endsection
