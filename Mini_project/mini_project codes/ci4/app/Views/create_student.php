<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration form</title>
  <!-- Include Bootstrap CSS from CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Study Scheme Form</h1>
    <form method="POST" action="<?php echo site_url('student_controller/insert'); ?>" class="mt-4">
      <div class="mb-3">
        <label for="course_code" class="form-label"><b>Course Code:</b></label>
        <input type="number" name="course_code" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="branch_code" class="form-label"><b>Branch Code:</b></label>
        <input type="number" name="branch_code" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="scheme_code" class="form-label"><b>Scheme Code:</b></label>
        <input type="number" name="scheme_code" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="leet_status" class="form-label"><b>LEET Status:</b></label>
        <select name="leet_status" class="form-select" required>
          <option value="leet">LEET</option>
          <option value="non-leet">Non-LEET</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="semester" class="form-label"><b>Semester:</b></label>
        <select name="semester" class="form-select" required>
          <?php for ($i = 1; $i <= 8; $i++) : ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
          <?php endfor; ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="6_month_training" class="form-label"><b>6-Month Training:</b></label>
        <div class="form-check">
          <input type="radio" name="6_month_training" value="Yes" class="form-check-input" required>
          <label class="form-check-label">Yes</label>
        </div>
        <div class="form-check">
          <input type="radio" name="6_month_training" value="No" class="form-check-input" required>
          <label class="form-check-label">No</label>
        </div>
      </div>

      <div class="mb-3">
        <label for="AICTE_RE" class="form-label"><b>AICTE_RE:</b></label>
        <input type="number" name="AICTE_RE" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="course_type" class="form-label"><b>Course Type:</b></label>
        <select name="course_type" class="form-select" required>
          <option value="Full-time">Full-time</option>
          <option value="Part-time">Part-time</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="subject_title" class="form-label"><b>Subject Title:</b></label>
        <input type="text" name="subject_title" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="m_code" class="form-label"><b>M code</b></label>
        <input type="number" name="m_code" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="theory_practical" class="form-label"><b>Theory/Practical:</b></label>
        <select name="theory/practical" class="form-select" required>
          <option value="Theory">Theory</option>
          <option value="Practical">Practical</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="elective_status" class="form-label"><b>Elective Status:</b></label>
        <div class="form-check">
          <input type="radio" name="elective_status" value="Yes" class="form-check-input" required>
          <label class="form-check-label">Yes</label>
        </div>
        <div class="form-check">
          <input type="radio" name="elective_status" value="No" class="form-check-input" required>
          <label class="form-check-label">No</label>
        </div>
      </div>

      <div class="mb-3">
        <label for="credits" class="form-label"><b>Credits:</b></label>
        <select name="credits" class="form-select" required>
          <option value="0">0</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="internal_marks" class="form-label"><b>Internal Marks:</b></label>
        <input type="number" name="internal_marks" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="external_marks" class="form-label"><b>External Marks:</b></label>
        <input type="number" name="external_marks" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="cbs_status" class="form-label"><b>CBS Status:</b></label>
        <div class="form-check">
          <input type="radio" name="cbs_status" value="Yes" class="form-check-input" required>
          <label class="form-check-label">Yes</label>
        </div>
        <div class="form-check">
          <input type="radio" name="cbs_status" value="No" class="form-check-input" required>
          <label class="form-check-label">No</label>
        </div>
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Insert</button>
    </form>
  </div>

  <!-- Include Bootstrap JS and Popper.js from CDN if needed -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
