<?php 
include __DIR__ . "/../config.php";

?>
<div ng-init="member.cards=[<?php foreach($cards as $card)
  echo '{value: '.$card.', active: false},';
?>]">
</div>

<div class="row">
  <h2 class="col-xs-12" ng-bind="member.topic"></h2>
</div>
      
<div class="row">
  <div class="col-lg-2 col-md-3 col-xs-4" ng-repeat="card in member.cards">
    <div class="card-container">
      <div class="card selectable" ng-class="{active: card.active, confirmed: card.confirmed}" ng-click="member.selectCard(card)">
        <div class="inner">
          <span class="card-label" ng-bind="card.value"></span>
	</div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <h2 class="col-xs-12">How to:</h2>
  <p class="col-xs-12">
    Votes can only be placed during an active poll.That means as long as the master has not started a poll or all votes have been placed, you can not vote!
    When you select a card it is highlighted in red, meaning that you vote is processed by the server. If it was placed successfully the card is highlighted
    green as feedback. Until everyone has placed their vote you can still change it. When the last person votes the poll is closed.
  </p>
</div>
