<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses Data</title>
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
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>Course Code</th>
          <th>Branch Code</th>
          <th>Scheme Code</th>
          <th>LEET Status</th>
          <th>Semester</th>
          <th>6-Month Training</th>
          <th>AICTE_RE</th>
          <th>Course Type</th>
          <th>Subject Title</th>
          <th>M Code</th>
          <th>Theory/Practical</th>
          <th>Elective Status</th>
          <th>Credits</th>
          <th>Internal Marks</th>
          <th>External Marks</th>
          <th>CBS Status</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Delete</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($courses as $course) : ?>
          <tr>
            <td><?php echo $course['course_code']; ?></td>
            <td><?php echo $course['branch_code']; ?></td>
            <td><?php echo $course['scheme_code']; ?></td>
            <td><?php echo $course['leet_status']; ?></td>
            <td><?php echo $course['semester']; ?></td>
            <td><?php echo $course['6_month_training']; ?></td>
            <td><?php echo $course['AICTE_RE']; ?></td>
            <td><?php echo $course['course_type']; ?></td>
            <td><?php echo $course['subject_title']; ?></td>
            <td><?php echo $course['m_code']; ?></td>
            <td><?php echo $course['theory/practical']; ?></td>
            <td><?php echo $course['elective_status']; ?></td>
            <td><?php echo $course['credits']; ?></td>
            <td><?php echo $course['internal_marks']; ?></td>
            <td><?php echo $course['external_marks']; ?></td>
            <td><?php echo $course['cbs_status']; ?></td>
            <td><?php echo $course['created_at']; ?></td>
            <td><?php echo $course['updated_at']; ?></td>
            <td><a href="<?php echo base_url(); ?>student_controller/delete_student/<?php echo $course['id']; ?>" class="btn btn-danger">Delete</a></td>
            <td><a href="<?php echo base_url(); ?>student_controller/edit_student/<?php echo $course['id']; ?>" class="btn btn-primary">Edit</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- Include Bootstrap JS and Popper.js from CDN if needed -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
