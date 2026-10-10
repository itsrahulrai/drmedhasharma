<div class="sidebar__widget sidebar__widget-three">
    <h4 class="sidebar__widget-title">Send Us Message</h4>
    <div class="sidebar__form">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('product.booking') }}" method="POST">
            @csrf
            <div class="form-grp">
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name"
                    class="form-control">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-grp">
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address"
                    class="form-control">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-grp">
                <input type="number" name="phone" value="{{ old('phone') }}" placeholder="Phone Number"
                    class="form-control" pattern="[0-9]{10}" maxlength="10" title="Enter 10-digit phone number">
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-grp">
                <select name="product" class="form-control">
                    <option value="">-- Select Services --</option>
                    <option value="Business Start-Up" {{ old('product') == 'Business Start-Up' ? 'selected' : '' }}>
                        Business Start-Up
                    </option>
                    <option value="Certification & Approval"
                        {{ old('product') == 'Certification & Approval' ? 'selected' : '' }}>
                        Certification & Approval
                    </option>
                    <option value="Income Tax (Direct Tax)"
                        {{ old('product') == 'Income Tax (Direct Tax)' ? 'selected' : '' }}>
                        Income Tax (Direct Tax)
                    </option>
                    <option value="Withholding Tax" {{ old('product') == 'Withholding Tax' ? 'selected' : '' }}>
                        Withholding Tax
                    </option>
                    <option value="International Taxation"
                        {{ old('product') == 'International Taxation' ? 'selected' : '' }}>
                        International Taxation
                    </option>
                    <option value="Goods & Services Tax"
                        {{ old('product') == 'Goods & Services Tax' ? 'selected' : '' }}>
                        Goods & Services Tax
                    </option>
                    <option value="Intelectual Property Right"
                        {{ old('product') == 'Intelectual Property Right' ? 'selected' : '' }}>
                        Intelectual Property Right
                    </option>
                    <option value="Earthing Equipment" {{ old('product') == 'Earthing Equipment' ? 'selected' : '' }}>
                        Earthing Equipment
                    </option>
                    <option value="Other Services" {{ old('product') == 'Other Services' ? 'selected' : '' }}>
                        Other Services
                    </option>
                </select>
                @error('product')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-grp">
                <textarea name="message" class="form-control" placeholder="Message" rows="4">{{ old('message') }}</textarea>
                @error('message')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success w-100">Book Now</button>
        </form>
    </div>
</div>
