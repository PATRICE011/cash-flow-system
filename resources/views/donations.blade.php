<div class="main-wrapper">
    <main class="container section">
        <h1>Donations</h1>

        <!-- Button to trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#donationModal">
            Add New Donation
        </button>

        <!-- Filters and Table for Donations and Tithes List -->
        <div class="containers mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="filter-group">
                    <label for="dateRangeStart">Filter by Date Range:</label>
                    <input type="date" id="dateRangeStart" name="dateRangeStart">
                    <input type="date" id="dateRangeEnd" name="dateRangeEnd">
                </div>
                <div class="sort-group">
                    <label for="sortOrder">Sort:</label>
                    <select id="sortOrder" name="sortOrder">
                        <option value="asc">Ascending</option>
                        <option value="desc">Descending</option>
                    </select>
                </div>
            </div>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Contributor Name</th>
                        <th>Amount (₱)</th>
                        <th>Description</th>
                        <th>Mode Used</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add your dynamic rows here -->
                    @foreach ($donations as $donation)
                    <tr>
                        <td>{{ $donation->date }}</td>
                        <td>{{ $donation->contributor_name }}</td>
                        <td>{{ $donation->amount }}</td>
                        <td>{{ $donation->description }}</td>
                        <td>{{ $donation->mode_used }}</td>
                        <td>
                            <!-- Add your action buttons or links here -->
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="donationModal" tabindex="-1" role="dialog" aria-labelledby="donationModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="donationModalLabel">Add Donation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('postDonate')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="contributorName">Contributor Name</label>
                                <input type="text" class="form-control" id="contributorName" name="contributorName">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount (₱)</label>
                                <input type="number" class="form-control" id="amount" name="amount">
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="modeUsed">Mode Used</label>
                                <select class="form-control" id="modeUsed" name="modeUsed">
                                <option value="cash">Cash</option>
                                <option value="credit_card">E-wallets</option>
                                <option value="bank_transfer">Bank Transfer</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
