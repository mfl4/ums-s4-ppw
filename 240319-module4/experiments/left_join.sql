SELECT student.student_id, student.name,
       score.course_name, score.number_score, score.letter_score
FROM (student LEFT JOIN  score ON student.student_id = score.student_id);