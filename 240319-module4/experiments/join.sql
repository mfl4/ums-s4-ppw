CREATE TABLE score
(
    student_id   VARCHAR(10) NOT NULL,
    course_name  CHAR(50)    NOT NULL,
    number_score INT         NOT NULL,
    letter_score CHAR(50)    NULL
);

INSERT INTO score VALUES
      ('L200080002', 'Kapita Selekta', 60, 'BC'),
      ('L200080010', 'Pemrograman Web', 87, 'A'),
      ('L200080080', 'Pemrograman Web', 90, 'A');

SELECT student.student_id, student.name,
       score.course_name, score.number_score, score.letter_score
FROM (student JOIN  score ON student.student_id = score.student_id);