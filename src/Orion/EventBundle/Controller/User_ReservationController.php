<?php

namespace Orion\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Orion\EventBundle\Entity\Billet;
use Orion\EventBundle\Entity\Reservation;
use AppBundle\Entity\User;


class User_ReservationController extends Controller{
    /**
     * Reserve a ticket.
     *
     */
    
     public function ReserveAction($id) {
        $em = $this->getDoctrine()->getManager();
        $billet = $em->getRepository('OrionEventBundle:Billet')->find($id);
        $user = $this->get('security.context')->getToken()->getUser();
        
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT b FROM OrionEventBundle:Billet b WHERE b.id = :id')
                ->setParameters(['id' => $id]);
        $billet = $query->getOneOrNullResult();
        /*$query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT b FROM OrionEventBundle:Billet b WHERE b.evenement = :event')
                ->setParameters(['event' => $evenement]);
        $entities = $query->getResult();*/
        return $this->render('OrionEventBundle:User_Reservation:user_billet_reserve_choice.html.twig', array(
                    'billet' => $billet,
        ));

        
     /**
     * .
     *
     */  
}
    
     public function ReserveEndAction($idBillet, $nbBillet) {
        
         $user = $this->getUser();
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT e FROM OrionEventBundle:Evenement e WHERE e.organisateur != :user and e.etat = :etat')
                ->setParameters(['user' => $user, 'etat' => 2]);
        $evenements = $query->getResult();
        
        
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT e FROM OrionEventBundle:Billet e WHERE e.id != :id')
                ->setParameters(['id' => $idBillet]);
        $billet = $query->getResult();
        
        
         $em = $this->getDoctrine()->getManager();
        //update / decrease billet number
         $billet = $em->getRepository('OrionEventBundle:Billet')->find($idBillet);

        if ($billet) {
            $nouveauNb = ($billet->getAttente())-$nbBillet;
            $billet->setAttente($nouveauNb);
            $em->flush();
        }
        //add reservation
        $reservation = new Reservation();
        $reservation->setUtilisateur($this->getUser());
        $reservation->setBillet($billet);
        $time = new \DateTime();
        $reservation->setDateReservation($time);
        $reservation->setNumber($nbBillet);


    $em->persist($reservation);
    
    $em->flush();
             //put reserve code here
    
    
        return $this->render('OrionEventBundle:User_Events:user_events_search.html.twig', array(
                    'entities' => $evenements,
        ));
        
    }
    /**
     * Display all ticket of an event for reservation.
     *
     */
     public function indexParEventReserveAction($id) {
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('OrionEventBundle:Evenement')->find($id);
        
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT b FROM OrionEventBundle:Billet b WHERE b.evenement = :event and b.attente != :nb')
                ->setParameters(['event' => $evenement, 'nb' => 0]);
        $entities = $query->getResult();
        return $this->render('OrionEventBundle:User_Reservation:user_billet_par_event_reserve_index.html.twig', array(
                    'entities' => $entities,
                    'id' => $id,
        ));
        
    }
    /**
     * Display the users booking list.
     *
     */
        public function MyReservationAction() {
        $em = $this->getDoctrine()->getManager();
        //$evenement = $em->getRepository('OrionEventBundle:Reservation')->find($id);
        $user = $this->getUser();
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT r FROM OrionEventBundle:Reservation r WHERE r.utilisateur = :utilisateur ')
                ->setParameters(['utilisateur' => $user]);
        $entities = $query->getResult();
        return $this->render('OrionEventBundle:User_Reservation:user_myReservation.html.twig', array(
                    'entities' => $entities,
                    
        ));
        
    }
    /**
     * Cancel a reservation.
     *
     */
    public function CancelAction($id) {
        $em = $this->getDoctrine()->getManager();
       // $reservation = $em->getRepository('OrionEventBundle:Reservation')->find($id);
        
        $user = $this->get('security.context')->getToken()->getUser();
        
        $query = $this->getDoctrine()->getEntityManager()
               ->createQuery('SELECT r FROM OrionEventBundle:Reservation r WHERE r.id = :id')
                ->setParameter('id', $id);

        if($query->getOneOrNullResult()!=null){
        $reservation = $query->getOneOrNullResult();}
        $billet=$em->getRepository('OrionEventBundle:Billet')->find($reservation->getBillet());
        //add of the number of cancelled reservation
        if ($reservation) {
            $attente = ($reservation->getBillet()->getAttente());
            $nbr_reservation=($reservation->getNumber());
            $billet->setAttente($attente + $nbr_reservation);
            $em->flush();
        }
       //Delete of the reservation
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('DELETE FROM OrionEventBundle:Reservation r WHERE r.id = :id')
                ->setParameters(['id' => $id]);
        $q = $query->getResult();
        
        
        

        $entities = $em->getRepository('OrionEventBundle:Reservation')->findAll();
        return $this->render('OrionEventBundle:User_Reservation:user_myReservation.html.twig', array(
                    'entities' => $entities,
                    
                    
        ));

        
        
}

}
