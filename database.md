# User 
-id
-name
-email
-password
-address

# General
-id
-user_id
-age
-gender (Enum->Erkek Kadın)
-weight
-height
-job
-physical_performance_score -> nullable

# Parq
-id
-chronic_illness
-tension
-cardiovascular
-chest_pain
-spinal_cord_discomfort
-anatomical_discomfort
-operation
-diabetes
-medicine
-supplements
-smoke
-addiction
-allergy


# IllnessParq (Many to Many)
-id
-parq_id
-illness_id

# Illness
-id
-name

# Bodyfat
-id
-user_id
-rate
-chest (Erkek)
-abdominal (Erkek)
-thigh (Erkek)
-biceps
-triceps
-subscapular
-suprailiac

# BodyfatNavyMethod
-id
-body_fat_id
-neck (Erkek-Kadın)
-waist (Erkek-Kadın)
-hip (Kadın)


# Blood Pressure
-id
-user_id
-systolic
-diastolic
-score -> nullable

# Fastingbloodsugar
-id 
-user_id
-glucose
-score -> nullable

# LungCapacity
-id
-user_id
-fev1
-fev
-pef
-score -> nullable

# Mobility
-id
-user_id
-overhead_squat
-overhead_squat_score
-shoulder_mobility
-shoulder_mobility_score
-hurdle_step
-hurdle_step_score
-in_line_lunge
-in_line_lunge_score
-active_straight_leg_raise
-active_straight_leg_raise_score
-trunk_stability_push_up
-trunk_stability_push_up_score
-rotary_stability
-rotary_stability_score
-score -> nullable

# Strength
-id
-user_id
-claw_grip_strength_right_hand
-clas_grip_strength_right_hand_score
-claw_grip_strength_left_hand
-claw_grip_strength_left_hand_score
-wall_squat
-wall_squat_score
-sit_up_test
-sit_up_test_score
-plank_test
-plank_test_score
-score -> nullable


# Maxvo2
-id
-user_id
-max_vo2
-score -> nullable





