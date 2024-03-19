CREATE VIEW src_view AS SELECT student.student_id,
       score.course_name, score.number_score, score.letter_score
FROM (student INNER JOIN score ON student.student_id = score.student_id);

SELECT * FROM src_view;