<div class="col-sm mt-3 text-white" style="height: 100%;">
    <div style="position: relative;">
        <img src="/images/{{ $name }}.jpg" alt="staff member" class="img-fluid" style="max-height: 328px;">
        <div id="triangle-bottomleft-staff"></div>
        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">{{ ucwords(str_replace('-', ' ', $name)) }}</div>
    </div>
    <p class="font-syne">
        <span class="txt-blue" style="font-size: 1.4em;">{{ ucwords($title) }}</span><br>
        {{ ucwords(str_replace('-', ' ', $name)) }} {{ $bio }}
    </p>
</div>
