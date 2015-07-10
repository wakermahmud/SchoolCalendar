<?php

    namespace KL\CalendarBundle\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolverInterface;

    class CourseType extends AbstractType {
        /**
         * @param FormBuilderInterface $builder
         * @param array                $options
         */
        public function buildForm(FormBuilderInterface $builder, array $options) {
            $builder
                ->add('name', 'text', array(
                    'label' => false,
                    'attr'  => array(
                        'placeholder' => 'name',
                        'class'       => 'form-control',

                    )))
                ->add('subject', 'entity', array(
                    'required' => true,
                    'class'    => 'KLCalendarBundle:Subject',
                    'property' => 'name',
                    'multiple' => false,
                    'label'    => false,
                    'attr'     => array(
                        'class' => 'form-control',
                    )))
                ->add('description', 'textarea', array(
                    'label' => false,
                    'attr'  => array(
                        'placeholder' => 'description',
                        'class'       => 'form-control',
                    )))
                ->add('professor', 'entity', array(
                    'required' => true,
                    'class'    => 'KLCalendarBundle:Professor',
                    'property' => 'fullName',
                    'multiple' => false,
                    'label'    => false,
                    'attr'     => array(
                        'class' => 'form-control',
                    )))
                ->add('date', 'text', array(
                    'label' => false,
                    'attr'  => array(
                        'placeholder' => 'date',
                        'class'       => 'form-control dateTimePicker',
                    )))
                ->add('duration', 'text', array(
                    'label' => false,
                    'attr'  => array(
                        'placeholder' => 'duration',
                        'class'       => 'form-control timePicker',
                    )));
        }

        /**
         * @param OptionsResolverInterface $resolver
         */
        public function setDefaultOptions(OptionsResolverInterface $resolver) {
            $resolver->setDefaults(array(
                'data_class' => 'KL\CalendarBundle\Entity\Course',
            ));
        }

        /**
         * @return string
         */
        public function getName() {
            return 'kl_calendarbundle_coursetype';
        }
    }
