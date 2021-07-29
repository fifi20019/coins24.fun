<div class="human-verification-wrapper">
	<h3>Human Verification</h3>
	<p>You are almost done! Click on the Verify Now button below to complete human verification.</p>
	<div class="row small-margin verification-user-info">	
		<div class="col-6 small-padding">	
			<div class="verification-player-panel">	
				<div class="connected-player-item animated bounceIn animation-delay-200">
					<div class="connected-label">Username:</div>
					<div class="connected-player-value connected-username-value"></div>
				</div>
				<div class="connected-player-item connected-player-item-2 animated bounceIn animation-delay-400">
					<div class="connected-label">Device:</div>
					<div class="connected-player-value connected-device-value"></div>
				</div>
			</div>	
		</div>	
		<div class="col-6 small-padding">
			<div class="console-generation-item console-generation-item-r-1 animated bounceIn animation-delay-600">
				<img src="img/r-item-1.png" class="resource-select-icon" />
				<div class="console-generation-item-value console-generation-item-value-r-1">0</div>
				<div class="resource-item-label">CoD Points</div>
			</div>
		</div>
	</div>
	<i class="fas fa-spinner fa-spin"></i>
	<div id="h-v-time-left-wrapper" class="h-v-time-left-wrapper">
		<span>Time Left:</span>
		<span id="human_verification_timer_time"></span>
	</div>
	<div class="verification-button-wrapper animated bounceIn animation-delay-1000">
		<a id="verification-button" class="cod-btn animated pulse infinite" onclick="CPABuildLock()"><span>Verify Now</span></a>
	</div>
</div>