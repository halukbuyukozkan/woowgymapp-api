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
-fvc
-pef
-score -> nullable





