
@extends('layouts.app')
@section('title', 'الرئيسية - وندر رابز الإمارات')
  <!-- Hero Section -->
@section('content')   
  <section class="hero">
    <div class="hero-content">
      <h1>خلي طفلك بطل القصة</h1>
      <p>أضف اسمه وصورته وصمّم قصة تراثية إماراتية خاصة به تجمع بين الإبداع والتعليم</p>
      <div class="hero-buttons">
        <a href="#books" class="btn btn-primary">صمم قصتك الآن</a>
        <a href="#features" class="btn btn-secondary">اكتشف المزيد</a>
      </div>
    </div>
  </section>
  
  <!-- Books Section -->
  <section class="section" id="books">
    <div class="section-title">
      <h2>اختر من مجموعتنا المميزة</h2>
      <p>قصص مخصصة تحكي مغامرات طفلك في أجواء تراثية إماراتية أصيلة</p>
    </div>
    
    <div class="books-container">
      <!-- Book 1 -->
      <div class="book-card">
        <div class="book-badge">الأكثر مبيعاً</div>
        <div class="book-image">
          <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="مغامرات سعيد في الصحراء">
        </div>
        <div class="book-content">
          <h3>مغامرات سعيد في الصحراء</h3>
          <p>انضم إلى سعيد في رحلته المثيرة عبر صحراء الإمارات واكتشف معه أسرار الحياة البدوية</p>
          <div class="book-price">
            <span class="price">149 درهم</span>
            <a href="{{ route('customize') }}" class="btn-card">خصّص القصة</a>
          </div>
        </div>
      </div>
      
      <!-- Book 2 -->
      <div class="book-card">
        <div class="book-badge">جديد</div>
        <div class="book-image">
          <img src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="أحلام موزة الطائرة">
        </div>
        <div class="book-content">
          <h3>أحلام موزة الطائرة</h3>
          <p>ارفع مع موزة في رحلة خيالية فوق معالم الإمارات الشهيرة في قصة تحفز الخيال والإبداع</p>
          <div class="book-price">
            <span class="price">129 درهم</span>
            <a href="{{ route('customize') }}" class="btn-card">خصّص القصة</a>
          </div>
        </div>
      </div>
      
      <!-- Book 3 -->
      <div class="book-card">
        <div class="book-image">
          <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="تراثنا الغالي">
        </div>
        <div class="book-content">
          <h3>تراثنا الغالي</h3>
          <p>رحلة تعليمية ممتعة تقدم للأطفال قيم التراث الإماراتي وعاداته وتقاليده الأصيلة</p>
          <div class="book-price">
            <span class="price">139 درهم</span>
            <a href="{{ route('customize') }}" class="btn-card">خصّص القصة</a>
          </div>
        </div>
      </div>
      
    </div>
    <div class="more-btn">
        <a href="{{ route('stories') }}" class="btn btn-primary">المزيد من القصص</a>
    </div>
  </section>
  
  <!-- Features Section -->
  <section class="section features" id="features">
    <div class="section-title">
      <h2>لماذا وندر رابز؟</h2>
      <p>نساعدك في صنع ذكريات تدوم مع طفلك عبر قصص مخصصة لا تنسى</p>
    </div>
    
    <div class="features-container">
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-book"></i>
        </div>
        <h3>قصص مخصصة</h3>
        <p>أدخل اسم طفلك، صورته، وتفاصيله الشخصية ليصبح بطلاً في قصته الخاصة</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-palette"></i>
        </div>
        <h3>تراث إماراتي</h3>
        <p>قصص مستوحاة من التراث الإماراتي الأصيل لتعزيز الهوية والانتماء</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-gift"></i>
        </div>
        <h3>هدية مميزة</h3>
        <p>الهدية المثالية للأعياد والمناسبات الخاصة التي سيتذكرها الطفل للأبد</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-shipping-fast"></i>
        </div>
        <h3>توصيل سريع</h3>
        <p>توصيل لجميع أنحاء الإمارات خلال 3-5 أيام عمل</p>
      </div>
    </div>
  </section>
  
  <!-- How it Works -->
  <section class="section">
    <div class="section-title">
      <h2>كيف تعمل وندر رابز؟</h2>
      <p>4 خطوات بسيطة لتصميم قصة طفلك المخصصة</p>
    </div>
    
    <div class="process-steps">
      <div class="step">
        <div class="step-number">1</div>
        <h3>اختر القصة</h3>
        <p>اختر من بين مجموعة قصصنا المميزة التي تناسب طفلك</p>
      </div>
      
      <div class="step">
        <div class="step-number">2</div>
        <h3>خصّص التفاصيل</h3>
        <p>أدخل اسم طفلك، صورته، ولون بشرته، وميزات أخرى</p>
      </div>
      
      <div class="step">
        <div class="step-number">3</div>
        <h3>راجع التصميم</h3>
        <p>راجع النسخة الأولية من القصة واطلب التعديلات إذا لزم الأمر</p>
      </div>
      
      <div class="step">
        <div class="step-number">4</div>
        <h3>استلم كتابك</h3>
        <p>استلم كتابك المطبوع فاخر الجودة على باب منزلك</p>
      </div>
    </div>
  </section>
  
  <!-- Testimonials -->
  <section class="section testimonials" id="testimonials">
    <div class="section-title">
      <h2>آراء عملائنا</h2>
      <p>قصصنا المخصصة صنعت فرقاً في حياة أطفالهم</p>
    </div>
    
    <div class="testimonials-container">
      <div class="testimonial-card">
        <p class="testimonial-text">"ابني لم يتوقف عن قراءة القصة منذ أن استلمناها! أصبح يحب القراءة بفضل هذه الهدية الرائعة. شكراً لوندر رابز على هذه التجربة المميزة."</p>
        <div class="testimonial-author">
          <div class="author-image">
            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="أم أحمد">
          </div>
          <div class="author-info">
            <h4>أم أحمد</h4>
            <p>أبوظبي</p>
          </div>
        </div>
      </div>
      
      <div class="testimonial-card">
        <p class="testimonial-text">"الجودة فائقة والرسومات رائعة. ما أثار إعجابي أكثر هو الاهتمام بالتفاصيل التراثية الإماراتية. طفلتي شعرت أنها بطلة حقيقية في القصة!"</p>
        <div class="testimonial-author">
          <div class="author-image">
            <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="والد ليلى">
          </div>
          <div class="author-info">
            <h4>والد ليلى</h4>
            <p>دبي</p>
          </div>
        </div>
      </div>
      
      <div class="testimonial-card">
        <p class="testimonial-text">"أفضل هدية ممكن تقديمها لطفل. القصة ليست فقط مسلية، بل تعليمية أيضاً. أحفادي يحبون قصصهم المخصصة ويقرؤونها كل ليلة."</p>
        <div class="testimonial-author">
          <div class="author-image">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="جدّة يوسف">
          </div>
          <div class="author-info">
            <h4>جدّة يوسف</h4>
            <p>الشارقة</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="section-title">
      <h2>الأسئلة الشائعة</h2>
      <p>كل ما تحتاج معرفته عن قصص وندر رابز المخصصة</p>
    </div>
    
    <div class="faq-container">
      <div class="faq-item">
        <div class="faq-question">
          كم من الوقت يستغرق إعداد القصة المخصصة؟
          <span class="faq-toggle">▼</span>
        </div>
        <div class="faq-answer">
          <p>بعد تقديم الطلب، نرسل لك المسودة الأولى خلال 3 أيام عمل. بعد موافقتك على التصميم، تستغرق الطباعة والتوصيل من 3-5 أيام عمل داخل الإمارات.</p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          هل يمكنني إجراء تعديلات على القصة بعد الطلب؟
          <span class="faq-toggle">▼</span>
        </div>
        <div class="faq-answer">
          <p>نعم، نرسل لك نسخة رقمية للمراجعة قبل الطباعة. يمكنك طلب تعديلين مجاناً، وكل تعديل إضافي برسوم 20 درهم.</p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          ما هي خيارات الدفع المتاحة؟
          <span class="faq-toggle">▼</span>
        </div>
        <div class="faq-answer">
          <p>نقبل الدفع عبر البطاقات الائتمانية (فيزا، ماستركارد)، حوالة بنكية، والدفع عند الاستلام داخل الإمارات.</p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          هل تقدمون خدمة التوصيل خارج الإمارات؟
          <span class="faq-toggle">▼</span>
        </div>
        <div class="faq-answer">
          <p>نعم، نقدم التوصيل لجميع دول الخليج. تكلفة التوصيل تختلف حسب الدولة وتتراوح بين 30-50 درهم إماراتي.</p>
        </div>
      </div>
    </div>
  </section>
  
  
  
  <script>
    // FAQ Toggle
    document.querySelectorAll('.faq-question').forEach(question => {
      question.addEventListener('click', () => {
        const faqItem = question.parentElement;
        faqItem.classList.toggle('active');
      });
    });
    
    // Smooth Scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        
        window.scrollTo({
          top: targetElement.offsetTop - 80,
          behavior: 'smooth'
        });
      });
    });
    
    // Navbar scroll effect
    window.addEventListener('scroll', () => {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.style.boxShadow = '0 4px 15px rgba(0, 0, 0, 0.1)';
        navbar.style.backgroundColor = 'rgba(254, 251, 247, 0.98)';
      } else {
        navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.05)';
        navbar.style.backgroundColor = 'rgba(254, 251, 247, 0.95)';
      }
    });
  </script>
@endsection