<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Form</title>
  <!-- Include Bootstrap CSS from CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Additional custom styles if needed */
    body {
      padding: 20px;
    }
  </style>
</head>
<body>
  <h1>Update Form</h1>
  <form method="POST" action="<?php echo site_url('student_controller/update_student'); ?>">
    <input type="hidden" name="id" value="<?php echo $course['id']; ?>"><br/><br/>
    
    <label><b>Course Code:</b></label>
    <input type="number" name="course_code" value="<?php echo $course['course_code']; ?>" class="form-control" required><br/><br/>

    <label><b>Branch Code:</b></label>
    <input type="number" name="branch_code" value="<?php echo $course['branch_code']; ?>" class="form-control" required><br/><br/>

    <label><b>Scheme Code:</b></label>
    <input type="number" name="scheme_code" value="<?php echo $course['scheme_code']; ?>" class="form-control" required><br/><br/>

    <label><b>LEET Status:</b></label>
    <select name="leet_status" class="form-control" required>
      <option value="leet" <?php echo ($course['leet_status'] === 'leet') ? 'selected' : ''; ?>>LEET</option>
      <option value="non-leet" <?php echo ($course['leet_status'] === 'non-leet') ? 'selected' : ''; ?>>Non-LEET</option>
    </select><br/><br/>

    <label><b>Semester:</b></label>
    <select name="semester" class="form-control" required>
      <?php for ($i = 1; $i <= 8; $i++) : ?>
        <option value="<?php echo $i; ?>" <?php echo ($course['semester'] == $i) ? 'selected' : ''; ?>><?php echo $i; ?></option>
      <?php endfor; ?>
    </select><br/><br/>

    <label><b>6-Month Training:</b></label>
    <div class="form-check">
      <input type="radio" name="6_month_training" value="Yes" class="form-check-input" <?php echo ($course['6_month_training'] === 'Yes') ? 'checked' : ''; ?> required>
      <label class="form-check-label">Yes</label>
    </div>
    <div class="form-check">
      <input type="radio" name="6_month_training" value="No" class="form-check-input" <?php echo ($course['6_month_training'] === 'No') ? 'checked' : ''; ?> required>
      <label class="form-check-label">No</label>
    </div><br/><br/>

    <label><b>AICTE_RE:</b></label>
    <input type="number" name="AICTE_RE" value="<?php echo $course['AICTE_RE']; ?>" class="form-control" required><br/><br/>

    <label><b>Course Type:</b></label>
    <select name="course_type" class="form-control" required>
      <option value="Full-time" <?php echo ($course['course_type'] === 'Full-time') ? 'selected' : ''; ?>>Full-time</option>
      <option value="Part-time" <?php echo ($course['course_type'] === 'Part-time') ? 'selected' : ''; ?>>Part-time</option>
    </select><br/><br/>

    <label><b>Subject Title:</b></label>
    <input type="text" name="subject_title" value="<?php echo $course['subject_title']; ?>" class="form-control" required><br/><br/>

    <label><b>M code:</b></label>
    <input type="number" name="m_code" value="<?php echo $course['m_code']; ?>" class="form-control" required><br/><br/>

    <label><b>Theory/Practical:</b></label>
    <select name="theory/practical" class="form-control" required>
      <option value="Theory" <?php echo ($course['theory/practical'] === 'Theory') ? 'selected' : ''; ?>>Theory</option>
      <option value="Practical" <?php echo ($course['theory/practical'] === 'Practical') ? 'selected' : ''; ?>>Practical</option>
    </select><br/><br/>

    <label><b>Elective Status:</b></label>
    <div class="form-check">
      <input type="radio" name="elective_status" value="Yes" class="form-check-input" <?php echo ($course['elective_status'] === 'Yes') ? 'checked' : ''; ?> required>
      <label class="form-check-label">Yes</label>
    </div>
    <div class="form-check">
      <input type="radio" name="elective_status" value="No" class="form-check-input" <?php echo ($course['elective_status'] === 'No') ? 'checked' : ''; ?> required>
      <label class="form-check-label">No</label>
    </div><br/><br/>

    <label><b>Credits:</b></label>
    <select name="credits" class="form-control" required>
      <option value="0" <?php echo ($course['credits'] === '0') ? 'selected' : ''; ?>>0</option>
      <option value="2" <?php echo ($course['credits'] === '2') ? 'selected' : ''; ?>>2</option>
      <option value="3" <?php echo ($course['credits'] === '3') ? 'selected' : ''; ?>>3</option>
      <option value="4" <?php echo ($course['credits'] === '4') ? 'selected' : ''; ?>>4</option>
    </select><br/><br/>

    <label><b>Internal Marks:</b></label>
    <input type="number" name="internal_marks" value="<?php echo $course['internal_marks']; ?>" class="form-control" required><br/><br/>

    <label><b>External Marks:</b></label>
    <input type="number" name="external_marks" value="<?php echo $course['external_marks']; ?>" class="form-control" required><br/><br/>

    <label><b>CBS Status:</b></label>
    <div class="form-check">
      <input type="radio" name="cbs_status" value="Yes" class="form-check-input" <?php echo ($course['cbs_status'] === 'Yes') ? 'checked' : ''; ?> required>
      <label class="form-check-label">Yes</label>
    </div>
    <div class="form-check">
      <input type="radio" name="cbs_status" value="No" class="form-check-input" <?php echo ($course['cbs_status'] === 'No') ? 'checked' : ''; ?> required>
      <label class="form-check-label">No</label>
    </div><br/><br/>

    <input type="submit" name="submit" value="Update" class="btn btn-primary">
  </form>

  <!-- Include Bootstrap JS and Popper.js from CDN if needed -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
