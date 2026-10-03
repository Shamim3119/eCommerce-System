                <section id="{{ $navigation->slug }}" class="section light-background">

                    <div class="container section-title">
                        <h2>{{ $navigation->header }}</h2>
                        <p>{{ $navigation->description }}</p>
                    </div>

                    <div class="container">

                        <div class="table-responsive">

                            <table class="table table-bordered table-hover align-middle">

                                <thead class="table-dark">
                                    <tr>
                                        <th width="80">SL</th>
                                        <th width="180">Certified By</th>
                                        <th>Certification No.</th>
                                        <th>Category</th>
                                        <th>Issue Date</th>
                                        <th>Valid Until</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($certifications as $certification)
                                        <tr>
                                            <td>{{ sprintf('%02d', $loop->iteration) }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('storage/' . $certification->image) }}"
                                                    class="img-fluid"
                                                    style="max-height:60px;"
                                                    alt="{{ $certification->category }}">
                                            </td>
                                            <td>{{ $certification->certification_no }}</td>
                                            <td>{{ $certification->category }}</td>
                                            <td>{{ $certification->issue_date }}</td>
                                            <td>{{ $certification->valid_until }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>