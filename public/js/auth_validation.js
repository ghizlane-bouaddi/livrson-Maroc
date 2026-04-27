document.addEventListener('DOMContentLoaded', function() {
    // 1. التعريف بالـ Regex (القواعد)
    const patterns = {
        name: /^[a-zA-Z\s]{3,20}$/, // حروف فقط، من 3 لـ 20 حرف
        email: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
        password: /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/, // 8 رموز، حرف ورقم على الأقل
        phone: /^(06|07)[0-9]{8}$/ // كيبدا بـ 06 أو 07 وتابعاه 8 د الأرقام
    };

    // 2. شد العناصر من الـ DOM (بناءً على الـ IDs اللي فـ Blade)
    const inputs = {
        name: document.getElementById('name'),
        email: document.getElementById('email'),
        password: document.getElementById('password'),
        phone: document.getElementById('phone')
    };

    const errors = {
        name: document.getElementById('nameError'),
        email: document.getElementById('emailError'),
        password: document.getElementById('passError'),
        phone: document.getElementById('phoneError')
    };

    // 3. وظيفة التحقق (Validation Function)
    function validate(field, regex, errorElement) {
        if (!field) return; // إيلا ماكانش الـ input فـ الصفحة (مثلا فـ Login مايكونش Nom)

        field.addEventListener('input', function() {
            if (regex.test(this.value)) {
                // إيلا كان صحيح ✅
                this.classList.remove('border-red-500', 'border-gray-300');
                this.classList.add('border-green-500');
                errorElement.classList.add('hidden');
            } else {
                // إيلا كان غلط ❌
                this.classList.remove('border-green-500', 'border-gray-300');
                this.classList.add('border-red-500');
                errorElement.classList.remove('hidden');
            }

            // إيلا كان خاوي رجعو للحالة الأصلية
            if (this.value === "") {
                this.classList.remove('border-green-500', 'border-red-500');
                this.classList.add('border-gray-300');
                errorElement.classList.add('hidden');
            }
        });
    }

    // 4. تطبيق الـ Validation على كل Input
    validate(inputs.name, patterns.name, errors.name);
    validate(inputs.email, patterns.email, errors.email);
    validate(inputs.password, patterns.password, errors.password);
    validate(inputs.phone, patterns.phone, errors.phone);
});
