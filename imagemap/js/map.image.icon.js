MapImageIcon = {
    // Icon counter
    _mapIconCounter : 0,
    // Icon width
    iconW: 27,
    // Icon height
    iconH: 26,

    // Main function
    init: function() {
        var parentOffset, iconX, iconY, that = this, iconCoordsRow;

        // Image click handler
        $('.map-image-holder img').on('click', function(event) {
            // Offset for parent element (from left top corner)
            parentOffset = $(this).parent().offset();
            // Offset from left top corner to mouse cursor
            iconX = event.pageX - parentOffset.left - (Math.round(that.iconW/2));
            iconY = event.pageY - parentOffset.top - (Math.round(that.iconH/2));

            // Add icon on the image
            $('<div class="map-image-icon"></div>')
                // Set id
                .attr('id', 'map-icon-' + (++that._mapIconCounter))
                // Set position
                .css({top: iconY + 'px', left: iconX  + 'px'})
                .appendTo($(this).parent());

            // Add block with input elements holding icon coordinates
            $('.map-points-holder').append('\
                <div><input type="text" name="iconCoords[' + that._mapIconCounter + '][x]" value=""/>\
                    <input type="text" name="iconCoords[' + that._mapIconCounter + '][y]" value=""/>\
                    <input type="text" name="iconCoords[' + that._mapIconCounter + '][text]" value=""/>\
                    <input type="button" data-icon-id="' + that._mapIconCounter + '" value="-"/>\
                </div>');
            // Get last added icon row
            iconCoordsRow = $('.map-points-holder div:last');
            // Get first input and put X value
            iconCoordsRow.find('input:eq(0)').val(iconX);
            // Get second input and put Y value
            iconCoordsRow.find('input:eq(1)').val(iconY);
        })

        // Add handler for 'delete icon' button
        this._mapIconDelete();
        // Debug panel (to view coordinates)
        this._mouseMoveDebug();
    },

    _mapIconDelete: function() {
        var mapIconId;
        $('.map-points-holder').on('click', 'div input:button', function() {
            // Get icon id from data attr
            mapIconId = $(this).data('iconId');
            $(this).parent().remove();
            $('#map-icon-' + mapIconId).remove();
        })
    },

    _mouseMoveDebug: function() {
        var parentOffset;
        $('.map-image-holder img').on('mousemove', function(event) {
            parentOffset = $(this).parent().offset();
            $('.map-debug-holder')
                .html('<em>X: ' + (event.pageX - parentOffset.left) + '<br />Y: ' + (event.pageY - parentOffset.top) + '</em>');
        })
    },

    // Show icon set over image
    showIconSet: function(iconSet) {
        if (!window.iconSet) return false;

        // Image container
        var parent = $('.map-image-holder');

        for (var i in iconSet) {
            $('<div class="map-image-icon"></div>')
            .addClass('tooltip')
            .attr('title', iconSet[i].text)
             // Set position
             .css({top: iconSet[i].y + 'px', left: iconSet[i].x  + 'px'})
             .appendTo(parent);
        }
        // Add tooltip
        parent.find('.tooltip').tooltipster();
    }
};
