                @if ($term = request(''))
                    <div class="alert alert-info">
                        <p>Zoekresultaten<strong>{{ $term }}</strong></p>
                    </div>
                @endif