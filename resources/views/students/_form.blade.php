@php
    $student = $student ?? null;
@endphp

<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name"
           class="form-control @error('name') is-invalid @enderror"
           value="{{ old('name', $student->name ?? '') }}">
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email"
           class="form-control @error('email') is-invalid @enderror"
           value="{{ old('email', $student->email ?? '') }}">
    @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" id="phone"
           class="form-control @error('phone') is-invalid @enderror"
           value="{{ old('phone', $student->phone ?? '') }}">
    @error('phone')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="course" class="form-label">Course</label>
    <input type="text" name="course" id="course"
           class="form-control @error('course') is-invalid @enderror"
           value="{{ old('course', $student->course ?? '') }}">
    @error('course')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" name="age" id="age"
           class="form-control @error('age') is-invalid @enderror"
           value="{{ old('age', $student->age ?? '') }}">
    @error('age')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
