<!-- Select Area Office -->
<div class="form-group col-sm-12 mb-3">
    <label for="branch_id">Select Area Office:</label>
    <select id="branch_id" name="branch_id" class="form-select" required>
        @foreach($branches as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
</div>

<!-- Input Service Type -->
<div class="form-group col-sm-12 mb-3">
    <label for="title">Input Service Type:</label>
    <input type="text" id="title" name="title" class="form-control" required>
</div>

<!-- Sender Full Name -->
<div class="form-group col-sm-12 mb-3">
    <label for="full_name">Sender Full Name:</label>
    <input type="text" id="full_name" name="full_name" class="form-control" required>
</div>

<!-- Sender Email -->
<div class="form-group col-sm-6 mb-3">
    <label for="email">Sender Email:</label>
    <input type="email" id="email" name="email" class="form-control" required>
</div>

<!-- Sender Phone -->
<div class="form-group col-sm-6 mb-3">
    <label for="phone">Sender Phone:</label>
    <input type="tel" id="phone" name="phone" class="form-control" required>
    <input type="hidden" name="department_id" value="16" class="form-control" required>
</div>

<!-- Description -->
<div class="form-group col-sm-12 col-lg-12 mb-3">
    <label for="description">Description:</label>
    <textarea id="description" name="description" class="form-control" required></textarea>
</div>

<!-- Upload Letter Of Intent -->
<div class="form-group col-sm-6">
    <label for="file">Upload Letter Of Intent:</label>
    <div class="input-group">
        <div class="custom-file">
            <input type="file" id="file" name="file" class="form-control" accept=".pdf,.doc,.docx,image/*" required>
        </div>
    </div>
</div>

<!-- File Upload Validation Script -->
<script>
    document.getElementById('file').addEventListener('change', function() {
        const file = this.files[0];
        const maxSize = 1048576; // 1MB in bytes
        const allowedFormats = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'image/jpeg', 'image/png', 'image/gif'];
        
        if (file) {
            if (!allowedFormats.includes(file.type)) {
                alert('Please select a valid file format (PDF, DOC, DOCX, JPEG, PNG, GIF).');
                this.value = ''; // Clear the file input
            } else if (file.size > maxSize) {
                alert('File size exceeds the maximum limit of 1MB.');
                this.value = ''; // Clear the file input
            }
        }
    });
</script>
